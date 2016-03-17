<?php
namespace Severalnines\Rpc\Cluster\Client;

/**
 * Class OperationalReportsClient
 *
 * @package Severalnines\Rpc\Cluster\Client
 */
class OperationalReportsClient
    extends AbstractClient
{

    const REPORT_DEFAULT = 'default';
    const REPORT_AVAILABILITY = 'availability';
    const REPORT_BACKUP = 'backup';

    /**
     * @link http://54.248.83.112/cmon-docs/current/ccrpc.html#listreports
     *
     * @return \Severalnines\Rpc\Net\Response
     * @throws \Severalnines\Rpc\Exception\Exception
     */
    public function get()
    {
        return $this->request(
            array(
                'operation' => 'listreports'
            )
        );
    }

    /**
     * @link http://54.248.83.112/cmon-docs/current/ccrpc.html#generatereport
     *
     * @param string $reportType
     * @param        $userName
     * @param array  $recipients
     *
     * @return \Severalnines\Rpc\Net\Response
     * @throws \Severalnines\Rpc\Exception\Exception
     */
    public function generate($reportType = self::REPORT_DEFAULT, $userName, array $recipients = array())
    {
        return $this->request(
            array(
                'operation'  => 'generatereport',
                'name'       => $reportType,
                'username'   => $userName,
                'recipients' => implode(',', $recipients),
            )
        );
    }

    /**
     * @link http://54.248.83.112/cmon-docs/current/ccrpc.html#deletereport
     *
     * @param $reportId
     *
     * @return \Severalnines\Rpc\Net\Response
     * @throws \Severalnines\Rpc\Exception\Exception
     */
    public function delete($reportId)
    {
        return $this->request(
            array(
                'operation' => 'deletereport',
                'id'        => $reportId,
            )
        );
    }

}