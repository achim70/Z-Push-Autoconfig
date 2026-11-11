<?php
/***********************************************
* File      :   config.php
* Project   :   Z-Push
* Descr     :   Autodiscover configuration file
*
* Created   :   30.07.2014
*
* Copyright 2007 - 2016 Zarafa Deutschland GmbH
*
* This program is free software: you can redistribute it and/or modify
* it under the terms of the GNU Affero General Public License, version 3,
* as published by the Free Software Foundation.
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU Affero General Public License for more details.
*
* You should have received a copy of the GNU Affero General Public License
* along with this program.  If not, see <http://www.gnu.org/licenses/>.
*
* Consult LICENSE file for details
************************************************/

/**********************************************************************************
 *  Default settings
 */

    // Replace zpush.example.com with your z-push's host name and uncomment the line below.
    // define('ZPUSH_HOST', 'zpush.example.com');

    // Defines the domain for the autoconfiguration
    // Replace example.com with your domain
    define('AUTO_DOMAIN', 'example.com');

    // Defines the display name for the autoconfiguration
    // Replace Example Company with your long display name
    define('AUTO_DISPLAYNAME', 'Example Company');

    // Defines the short display name for the autoconfiguration
    // Replace Example with your short display name
    define('AUTO_SHORTNAME', 'Example');

    // Defines the default time zone, change e.g. to "Europe/London" if necessary
    define('TIMEZONE', '');

    // Defines the base path on the server
    define('BASE_PATH', dirname($_SERVER['SCRIPT_FILENAME']). '/');

    /*
     * Whether to use the complete email address as a login name
     * (e.g. user@company.com) or the username only (user).
     * Possible values:
     * false - use the username only (default).
     * true - use the complete email address.
     */
    define('USE_FULLEMAIL_FOR_LOGIN', false);

    /*
     * AutoDiscover requires the username to match either the email address
     * or the local part of the email address.
     * This is not always possible as the username might have a different
     * schema than email address. Configure this parameter to match your
     * username settings.
     * @see https://github.com/Z-Hub/Z-Push/wiki/Configuring-Z-Push-Autodiscover
     * @see https://jira.z-hub.io/browse/ZP-1209
     *
     * Possible values:
     * AUTODISCOVER_LOGIN_EMAIL             - uses the email address as provided when setting up the account
     * AUTODISCOVER_LOGIN_NO_DOT            - removes the '.' from email address:
     *                                          email: first.last@domain.com -> resulting username: firstlast
     * AUTODISCOVER_LOGIN_F_NO_DOT_LAST     - cuts the first part before '.' after the first letter and
     *                                          removes the '.' from email address:
     *                                          email: first.last@domain.com -> resulting username: flast
     * AUTODISCOVER_LOGIN_F_DOT_LAST        - cuts the part before '.' after the first letter and
     *                                          leaves the part after '.' as is:
     *                                          email: first.last@domain.com -> resulting username: f.last
     */
    define('AUTODISCOVER_LOGIN_TYPE', AUTODISCOVER_LOGIN_EMAIL);

/**********************************************************************************
 *  IMAP Settings
 */

    // Replace imap.example.com with the URL of your IMAP server
    // Uncomment the following line if you use an IMAP server
    //define('AUTO_IMAP_HOST', 'imap.example.com');

    // Defines the port used by the IMAP server
    define('AUTO_IMAP_PORT', 143);

    // Defines whether secure passwort authentication is used
    define('AUTO_IMAP_SPA', true);

    // Defines whether SSL is used
    define('AUTO_IMAP_SSL', true);

    // If set to true IMAP is preferred over POP3, if false, POP3 is preferred
    define('AUTO_IMAP_PREFERENCE', true);

/**********************************************************************************
 *  POP3 Settings
 */

    // Replace pop3.example.com with the URL of your POP3 server
    // Uncomment the following line if you use a POP3 server
    //define('AUTO_POP3_HOST', 'pop3.example.com');

    // Defines the port used by the POP3 server
    define('AUTO_POP3_PORT', 110);

    // Defines whether secure passwort authentication is used
    define('AUTO_POP3_SPA', true);

    // Defines whether SSL is used
    define('AUTO_POP3_SSL', true);

/**********************************************************************************
 *  SMTP Settings
 */

    // Replace smtp.example.com with the URL of your SMTP server
    // Uncomment the following line if you use an SMTP server
    //define('AUTO_SMTP_HOST', 'smtp.example.com');

    // Defines the port used by the SMTP server
    define('AUTO_SMTP_PORT', 587);

    // Defines whether secure passwort authentication is used
    define('AUTO_SMTP_SPA', true);

    // Defines whether SSL is used
    define('AUTO_SMTP_SSL', true);

/**********************************************************************************
 *  Addressbook Settings
 */

    // Replace ical.example.com with the URL of your CardDav server
    // Uncomment the following line if you use a CardDav server
    //define('AUTO_CARDDAV_URL', 'https://ical.example.com/adressbooks/%EMAILADDRESS%/standard/');

    // Defines the authentication type
    // Possible values are:
    //     basic:     HTTP Basic authentication
    //     digest:    HTTP Digest authentication
    define('AUTO_CARDDAV_AUTHENTICATION', 'basic');

/**********************************************************************************
 *  Calendar Settings
 */

    // Replace ical.example.com with the URL of your CalDav server
    // Uncomment the following line if you use a CalDav server
    //define('AUTO_CALDAV_URL', 'https://ical.example.com/calendars/%EMAILADDRESS%/standard/');

    // Defines the authentication type
    // Possible values are:
    //     basic:     HTTP Basic authentication
    //     digest:    HTTP Digest authentication
    define('AUTO_CALDAV_AUTHENTICATION', 'basic');

/**********************************************************************************
 *  Logging settings
 *  Possible LOGLEVEL and LOGUSERLEVEL values are:
 *  LOGLEVEL_OFF            - no logging
 *  LOGLEVEL_FATAL          - log only critical errors
 *  LOGLEVEL_ERROR          - logs events which might require corrective actions
 *  LOGLEVEL_WARN           - might lead to an error or require corrective actions in the future
 *  LOGLEVEL_INFO           - usually completed actions
 *  LOGLEVEL_DEBUG          - debugging information, typically only meaningful to developers
 *  LOGLEVEL_WBXML          - also prints the WBXML sent to/from the device
 *  LOGLEVEL_DEVICEID       - also prints the device id for every log entry
 *  LOGLEVEL_WBXMLSTACK     - also prints the contents of WBXML stack
 *
 *  The verbosity increases from top to bottom. More verbose levels include less verbose
 *  ones, e.g. setting to LOGLEVEL_DEBUG will also output LOGLEVEL_FATAL, LOGLEVEL_ERROR,
 *  LOGLEVEL_WARN and LOGLEVEL_INFO level entries.
 */

    define('LOGBACKEND', 'filelog');

    define('LOGFILEDIR', '/var/log/z-push/');
    define('LOGFILE', LOGFILEDIR . 'autodiscover.log');
    define('LOGERRORFILE', LOGFILEDIR . 'autodiscover-error.log');
    define('LOGLEVEL', LOGLEVEL_INFO);
    define('LOGUSERLEVEL', LOGLEVEL);
    $specialLogUsers = array();

    // Syslog settings
    // false will log to local syslog, otherwise put the remote syslog IP here
    define('LOG_SYSLOG_HOST', false);
    // Syslog port
    define('LOG_SYSLOG_PORT', 514);
    // Program showed in the syslog. Useful if you have more than one instance login to the same syslog
    define('LOG_SYSLOG_PROGRAM', 'z-push-autodiscover');
    // Syslog facility - use LOG_USER when running on Windows
    define('LOG_SYSLOG_FACILITY', LOG_LOCAL0);
/**********************************************************************************
 *  Backend settings
 */
    // the backend data provider
    define('BACKEND_PROVIDER', '');
