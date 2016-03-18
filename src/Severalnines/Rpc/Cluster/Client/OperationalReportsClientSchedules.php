<?php
namespace Severalnines\Rpc\Cluster\Client;

use Severalnines\Rpc\Net\Request;

/**
 * Class OperationalReportsClient
 *
 * @package Severalnines\Rpc\Cluster\Client
 */
class OperationalReportsSchedulesClient
    extends AbstractClient
{

    const REPORT_DEFAULT = 'default';
    const REPORT_AVAILABILITY = 'availability';
    const REPORT_BACKUP = 'backup';

    /**
     * @link http://54.248.83.112/cmon-docs/current/ccrpc.html#schedules
     *
     * @return \Severalnines\Rpc\Net\Response
     * @throws \Severalnines\Rpc\Exception\Exception
     */
    public function get()
    {
        return $this->request(new Request('schedules'));
    }

    /**
     * @link http://54.248.83.112/cmon-docs/current/ccrpc.html#addschedule
     *
     * @param string $reportType
     * @param        $userName
     * @param        $schedule
     * @param array  $recipients
     *
     * @return \Severalnines\Rpc\Net\Response
     * @throws \Severalnines\Rpc\Exception\Exception
     */
    public function schedule($reportType = self::REPORT_DEFAULT, $userName, $schedule, array $recipients = array())
    {
        $request = new Request('addschedule');
        return $this->request(
            $request
                ->set('name', $reportType)
                ->set('username', $userName)
                ->set('schedule', $schedule)
                ->set('recipients', implode(',', $recipients))
        );
    }

    /**
     * @link http://54.248.83.112/cmon-docs/current/ccrpc.html#removeschedule
     *
     * @param $reportId
     *
     * @return \Severalnines\Rpc\Net\Response
     * @throws \Severalnines\Rpc\Exception\Exception
     */
    public function delete($reportId)
    {
        $request = new Request('removeschedule');
        return $this->request($request->set('id', $reportId));
    }

}