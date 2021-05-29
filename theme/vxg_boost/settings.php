<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

defined('MOODLE_INTERNAL') || die();

// This is used for performance, we don't need to know about these settings on every page in Moodle, only when
// we are looking at the admin settings pages.
if ($ADMIN->fulltree) {

    // Boost provides a nice setting page which splits settings onto separate tabs. We want to use it here.
    $settings = new theme_boost_admin_settingspage_tabs('themesettingvxg_boost', get_string('configtitle', 'theme_vxg_boost'));

    // Each page is a tab - the first is the "General" tab.
    $page = new admin_settingpage('theme_vxg_boost_general', get_string('generalsettings', 'theme_vxg_boost'));

    // Replicate the preset setting from boost.
    $name = 'theme_vxg_boost/preset';
    $title = get_string('preset', 'theme_vxg_boost');
    $description = get_string('preset_desc', 'theme_vxg_boost');
    $default = 'default.scss';

    // We list files in our own file area to add to the drop down. We will provide our own function to
    // load all the presets from the correct paths.
    $context = context_system::instance();
    $fs = get_file_storage();
    $files = $fs->get_area_files($context->id, 'theme_vxg_boost', 'preset', 0, 'itemid, filepath, filename', false);

    $choices = [];
    foreach ($files as $file) {
        $choices[$file->get_filename()] = $file->get_filename();
    }
    // These are the built in presets from Boost.
    $choices['default.scss'] = 'default.scss';
    $choices['plain.scss'] = 'plain.scss';

    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Preset files setting.
    $name = 'theme_vxg_boost/presetfiles';
    $title = get_string('presetfiles', 'theme_vxg_boost');
    $description = get_string('presetfiles_desc', 'theme_vxg_boost');

    $setting = new admin_setting_configstoredfile($name, $title, $description, 'preset', 0,
        array('maxfiles' => 20, 'accepted_types' => array('.scss')));
    $page->add($setting);

    // Settings title to group brand color related settings together with a common heading. We don't want a description here.
    $name = 'theme_vxg_boost/brandcolorheading';
    $title = get_string('brandcolorheadingsetting', 'theme_vxg_boost', null, true);
    $setting = new admin_setting_heading($name, $title, null);
    $page->add($setting);

    // Variable $brand-color.
    // We use an empty default value because the default colour should come from the preset.
    $name = 'theme_vxg_boost/brandcolor';
    $title = get_string('brandcolor', 'theme_boost', null, true);
    $description = get_string('brandcolor_desc', 'theme_boost', null, true);
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Variable $brand-succes-color.
    $name = 'theme_vxg_boost/brandsuccesscolor';
    $title = get_string('brandsuccesscolorsetting', 'theme_vxg_boost', null, true);
    $description = get_string('brandsuccesscolorsetting_desc', 'theme_vxg_boost', null, true);
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Variable $brand-info-color.
    $name = 'theme_vxg_boost/brandinfocolor';
    $title = get_string('brandinfocolorsetting', 'theme_vxg_boost', null, true);
    $description = get_string('brandinfocolorsetting_desc', 'theme_vxg_boost', null, true);
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Variable $brand-warning-color.
    $name = 'theme_vxg_boost/brandwarningcolor';
    $title = get_string('brandwarningcolorsetting', 'theme_vxg_boost', null, true);
    $description = get_string('brandwarningcolorsetting_desc', 'theme_vxg_boost', null, true);
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $drawerchoices['iconsandtexts'] = get_string('iconsandtexts', 'theme_vxg_boost');
    $drawerchoices['onlyicons'] = get_string('onlyicons', 'theme_vxg_boost');

    $name = 'theme_vxg_boost/drawerstyle';
    $title = get_string('drawerstyle', 'theme_vxg_boost');
    $description = get_string('drawerstyle_desc', 'theme_vxg_boost');
    $default = 'iconsandtexts';

    $setting = new admin_setting_configselect($name, $title, $description, $default, $drawerchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);


    // Must add the page after definiting all the settings!
    $settings->add($page);

    // END GENERAR SETTINGS.

    // Advanced settings.
    $page = new admin_settingpage('theme_vxg_boost_advanced', get_string('advancedsettings', 'theme_vxg_boost'));

    // Raw SCSS to include before the content.
    $setting = new admin_setting_configtextarea('theme_vxg_boost/scsspre',
        get_string('rawscsspre', 'theme_vxg_boost'), get_string('rawscsspre_desc', 'theme_vxg_boost'), '', PARAM_RAW);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Raw SCSS to include after the content.
    $setting = new admin_setting_configtextarea('theme_vxg_boost/scss', get_string('rawscss', 'theme_vxg_boost'),
        get_string('rawscss_desc', 'theme_vxg_boost'), '', PARAM_RAW);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $settings->add($page);

    // END ADVANCED SETTINGS.

    // Each page is a tab - the second is the "Backgrounds" tab.
    $page = new admin_settingpage('theme_vxg_boost_backgrounds', get_string('backgrounds', 'theme_vxg_boost'));

    /* Colors */

    $name = 'theme_vxg_boost/cardsbgcolor';
    $title = get_string('cardsbgcolor', 'theme_vxg_boost');
    $description = get_string('cardsbgcolor_desc', 'theme_vxg_boost');
    // This creates the new setting.
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    // This function will copy the image into the data_root location it can be served from.
    $setting->set_updatedcallback('theme_reset_all_caches');
    // We always have to add the setting to a page for it to have any effect.
    $page->add($setting);

    $name = 'theme_vxg_boost/foterbgcolor';
    $title = get_string('foterbgcolor', 'theme_vxg_boost');
    $description = get_string('foterbgcolor_desc', 'theme_vxg_boost');
    // This creates the new setting.
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    // This function will copy the image into the data_root location it can be served from.
    $setting->set_updatedcallback('theme_reset_all_caches');
    // We always have to add the setting to a page for it to have any effect.
    $page->add($setting);

    $name = 'theme_vxg_boost/drawerbgcolor';
    $title = get_string('drawerbgcolor', 'theme_vxg_boost');
    $description = get_string('drawerbgcolor_desc', 'theme_vxg_boost');
    // This creates the new setting.
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    // This function will copy the image into the data_root location it can be served from.
    $setting->set_updatedcallback('theme_reset_all_caches');
    // We always have to add the setting to a page for it to have any effect.
    $page->add($setting);

    $name = 'theme_vxg_boost/bodybgcolor';
    $title = get_string('bodybgcolor', 'theme_vxg_boost');
    $description = get_string('bodybgcolor_desc', 'theme_vxg_boost');
    // This creates the new setting.
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '');
    // This function will copy the image into the data_root location it can be served from.
    $setting->set_updatedcallback('theme_reset_all_caches');
    // We always have to add the setting to a page for it to have any effect.
    $page->add($setting);

    $settings->add($page);
    // END BACKGROUDS SETTINGS.

    $page = new admin_settingpage('theme_vxg_boost_footer', get_string('footer', 'theme_vxg_boost'));

    // Helplink.
    $name = 'theme_vxg_boost/footerhidehelplink';
    $title = get_string('footerhidehelplinksetting', 'theme_vxg_boost', null, true);
    $description = get_string('footerlinks_desc', 'theme_vxg_boost', null, true);
    $setting = new admin_setting_configcheckbox($name, $title, $description, 'no', 'yes', 'no' ); // Overriding default values
        // yes = 1 and no = 0 because of the use of empty() in theme_vxg_boost_get_pre_scss() (lib.php). Default 0 value would
        // not write the variable to scss that could cause the scss to crash if used in that file. See MDL-58376.
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Logininfo.
    $name = 'theme_vxg_boost/footerhidelogininfo';
    $title = get_string('footerhidelogininfosetting', 'theme_vxg_boost', null, true);
    $description = get_string('footerlinks_desc', 'theme_vxg_boost', null, true);
    $setting = new admin_setting_configcheckbox($name, $title, $description, 'no', 'yes', 'no' ); // Overriding default values
        // yes = 1 and no = 0 because of the use of empty() in theme_vxg_boost_get_pre_scss() (lib.php). Default 0 value would
        // not write the variable to scss that could cause the scss to crash if used in that file. See MDL-58376.
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Homelink.
    $name = 'theme_vxg_boost/footerhidehomelink';
    $title = get_string('footerhidehomelinksetting', 'theme_vxg_boost', null, true);
    $description = get_string('footerlinks_desc', 'theme_vxg_boost', null, true);
    $setting = new admin_setting_configcheckbox($name, $title, $description, 'no', 'yes', 'no' ); // Overriding default values
        // yes = 1 and no = 0 because of the use of empty() in theme_vxg_boost_get_pre_scss() (lib.php). Default 0 value would
        // not write the variable to scss that could cause the scss to crash if used in that file. See MDL-58376.
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // User tours.
    $name = 'theme_vxg_boost/footerhideusertourslink';
    $title = get_string('footerhideusertourslinksetting', 'theme_vxg_boost', null, true);
    $description = get_string('footerlinks_desc', 'theme_vxg_boost', null, true);
    $setting = new admin_setting_configcheckbox($name, $title, $description, 'no', 'yes', 'no' ); // Overriding default values
    // Yes = 1 and no = 0 because of the use of empty() in theme_vxg_boost_get_pre_scss() (lib.php). Default 0 value would
    // Not write the variable to scss that could cause the scss to crash if used in that file. See MDL-58376.
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_vxg_boost/footerhidetooldataprivacy';
    $title = get_string('footerhidetooldataprivacysetting', 'theme_vxg_boost', null, true);
    $description = get_string('footerlinks_desc', 'theme_vxg_boost', null, true);
    $setting = new admin_setting_configcheckbox($name, $title, $description, 'no', 'yes', 'no' ); // Overriding default values
    // Yes = 1 and no = 0 because of the use of empty() in theme_vxg_boost_get_pre_scss() (lib.php). Default 0 value would
    // Not write the variable to scss that could cause the scss to crash if used in that file. See MDL-58376.
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    $name = 'theme_vxg_boost/footerhidewhole';
    $title = get_string('footerhidewholesetting', 'theme_vxg_boost', null, true);
    $description = get_string('wholefooter_desc', 'theme_vxg_boost', null, true);
    $setting = new admin_setting_configcheckbox($name, $title, $description, 'no', 'yes', 'no' ); // Overriding default values
    // Yes = 1 and no = 0 because of the use of empty() in theme_vxg_boost_get_pre_scss() (lib.php). Default 0 value would
    // Not write the variable to scss that could cause the scss to crash if used in that file. See MDL-58376.
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    $settings->add($page);
}