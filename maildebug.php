<?php
defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Plugin\CMSPlugin;
use Joomla\CMS\Mail\Mail;

class PlgSystemMaildebug extends CMSPlugin
{
    public function onAfterInitialise()
    {
        $mailer = Factory::getMailer();

        // Active le debug SMTP
        $mailer->SMTPDebug = 4; // Niveau max : logs détaillés
        $mailer->Debugoutput = function($str, $level) {
            file_put_contents('D:\Logs\Joomla\Curaio\logs\smtp_debug.log', $str . PHP_EOL, FILE_APPEND);
        };
    }
}
?>
