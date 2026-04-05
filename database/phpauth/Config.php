<?php
namespace PHPAuth;

/**
 * PHPAuth Config Class - Local Patched Version (PHP 8.x Optimized)
 */
class Config
{
    private $dbh;
    private $config;
    private $config_table = 'config';

    /**
     * Config::__construct()
     *
     * @param \PDO $dbh
     * @param string $config_table
     */
    public function __construct(\PDO $dbh, $config_table = 'config')
    {
        $this->dbh = $dbh;

        if (func_num_args() > 1) {
            $this->config_table = $config_table;
        }

        $this->config = array();

        $query = $this->dbh->query("SELECT * FROM {$this->config_table}");

        while ($row = $query->fetch()) {
            $this->config[$row['setting']] = $row['value'];
        }

        $this->setForgottenDefaults();
    }

    /**
     * Config::__get()
     * 
     * @param mixed $setting
     * @return string
     */
    public function __get($setting)
    {
        return $this->config[$setting] ?? null;
    }

    /**
     * Config::__isset()
     * 
     * @param mixed $setting
     * @return bool
     */
    public function __isset($setting)
    {
        return isset($this->config[$setting]);
    }

    /**
     * Config::__set()
     * 
     * @param mixed $setting
     * @param mixed $value
     * @return bool
     */
    public function __set($setting, $value)
    {
        $query = $this->dbh->prepare("UPDATE {$this->config_table} SET value = ? WHERE setting = ?");

        if ($query->execute(array($value, $setting))) {
            $this->config[$setting] = $value;
            return true;
        }
        return false;
    }

    /**
     * Config::override()
     * 
     * @param mixed $setting
     * @param mixed $value
     * @return bool
     */
    public function override($setting, $value)
    {
        $this->config[$setting] = $value;
        return true;
    }

    /**
     * Set default values for missing settings.
     */
    private function setForgottenDefaults()
    {
        $defaults = [
            'verify_password_min_length' => 3,
            'verify_password_max_length' => 150,
            'verify_password_strong_requirements' => 1,
            'verify_email_min_length' => 5,
            'verify_email_max_length' => 100,
            'verify_email_use_banlist' => 1,
            'emailmessage_suppress_activation' => 0,
            'emailmessage_suppress_reset' => 0
        ];

        foreach ($defaults as $key => $value) {
            if (!isset($this->config[$key])) {
                $this->config[$key] = $value;
            }
        }
    }
}
