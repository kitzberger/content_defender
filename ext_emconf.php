<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "content_defender".
 *
 * Auto generated 08-03-2023 08:11
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Content Defender',
  'description' => 'Define allowed or denied content element types in your backend layouts',
  'category' => 'plugin',
  'author' => 'Nicole Cordes',
  'author_email' => 'typo3@cordes.co',
  'author_company' => 'biz-design',
  'state' => 'stable',
  'uploadfolder' => 0,
  'createDirs' => '',
  'clearCacheOnLoad' => 0,
  'version' => '3.3.0',
  'constraints' =>
  array (
    'depends' =>
    array (
      'typo3' => '9.5.0-12.4.99',
    ),
    'conflicts' =>
    array (
    ),
    'suggests' =>
    array (
    ),
  ),
  '_md5_values_when_last_written' => 'a:153:{s:9:"ChangeLog";s:4:"6994";s:7:"LICENSE";s:4:"b234";s:9:"README.md";s:4:"f9d5";s:13:"composer.json";s:4:"c608";s:13:"composer.lock";s:4:"5d7b";s:14:"ext_tables.php";s:4:"a6ab";s:16:"phpunit.xml.dist";s:4:"316a";s:24:"sonar-project.properties";s:4:"ee02";s:52:"Classes/BackendLayout/BackendLayoutConfiguration.php";s:4:"9ac6";s:66:"Classes/BackendLayout/ColumnConfigurationManipulationInterface.php";s:4:"679f";s:47:"Classes/Exception/MissingInterfaceException.php";s:4:"9a79";s:54:"Classes/Form/Exception/AccessDeniedColPosException.php";s:4:"05f6";s:47:"Classes/Form/FormDataProvider/TcaCTypeItems.php";s:4:"65b5";s:48:"Classes/Form/FormDataProvider/TcaColPosItems.php";s:4:"4c14";s:41:"Classes/Hooks/AbstractDataHandlerHook.php";s:4:"5e07";s:39:"Classes/Hooks/CmdmapDataHandlerHook.php";s:4:"8d04";s:40:"Classes/Hooks/DatamapDataHandlerHook.php";s:4:"51cd";s:33:"Classes/Hooks/WizardItemsHook.php";s:4:"6f5c";s:39:"Classes/Repository/ColPosCountState.php";s:4:"3945";s:40:"Classes/Repository/ContentRepository.php";s:4:"887b";s:27:"Configuration/Services.yaml";s:4:"b816";s:36:"Resources/Public/Icons/Extension.png";s:4:"f488";s:47:"Tests/Functional/AbstractFunctionalTestCase.php";s:4:"5e95";s:80:"Tests/Functional/Fixtures/Classes/ContentElement/NewContentElementController.php";s:4:"9d01";s:69:"Tests/Functional/Fixtures/Classes/Hooks/SimpleSelectboxSingleHook.php";s:4:"19ea";s:68:"Tests/Functional/Fixtures/Configuration/TCA/Overrides/tt_content.php";s:4:"af4c";s:47:"Tests/Functional/Fixtures/Database/be_users.csv";s:4:"92a7";s:44:"Tests/Functional/Fixtures/Database/pages.csv";s:4:"629b";s:51:"Tests/Functional/Fixtures/Database/sys_language.csv";s:4:"e1b8";s:52:"Tests/Functional/Fixtures/Database/sys_workspace.csv";s:4:"ab48";s:49:"Tests/Functional/Fixtures/Database/tt_content.csv";s:4:"0370";s:44:"Tests/Functional/Fixtures/Frontend/site.yaml";s:4:"8c17";s:61:"Tests/Functional/Fixtures/TSconfig/NewContentElementWizard.ts";s:4:"44a8";s:60:"Tests/Functional/Fixtures/TSconfig/BackendLayouts/Default.ts";s:4:"0be4";s:60:"Tests/Functional/Fixtures/TSconfig/BackendLayouts/Subpage.ts";s:4:"e1da";s:60:"Tests/Functional/Form/FormDataProvider/TcaCTypeItemsTest.php";s:4:"b780";s:61:"Tests/Functional/Form/FormDataProvider/TcaColPosItemsTest.php";s:4:"d1ae";s:52:"Tests/Functional/Hooks/CmdmapDataHandlerHookTest.php";s:4:"d66f";s:53:"Tests/Functional/Hooks/DatamapDataHandlerHookTest.php";s:4:"4731";s:62:"Tests/Functional/Hooks/DatamapDataHandlerHookWorkspaceTest.php";s:4:"4ec7";s:46:"Tests/Functional/Hooks/WizardItemsHookTest.php";s:4:"2327";s:47:"Tests/Unit/Repository/ContentRepositoryTest.php";s:4:"7495";s:31:"config/sites/page_1/config.yaml";s:4:"10d2";s:26:"config/system/settings.php";s:4:"9254";s:13:"var/.htaccess";s:4:"8224";s:79:"var/cache/code/core/BackendModules_37948cdfb404d8c42bfce923982dd3d1119ce68c.php";s:4:"3664";s:78:"var/cache/code/core/BackendRoutes_37948cdfb404d8c42bfce923982dd3d1119ce68c.php";s:4:"9198";s:92:"var/cache/code/core/ExpressionLanguageProviders_37948cdfb404d8c42bfce923982dd3d1119ce68c.php";s:4:"a22e";s:70:"var/cache/code/core/Icons_37948cdfb404d8c42bfce923982dd3d1119ce68c.php";s:4:"2ebc";s:78:"var/cache/code/core/ext_localconf_37948cdfb404d8c42bfce923982dd3d1119ce68c.php";s:4:"0306";s:75:"var/cache/code/core/ext_tables_37948cdfb404d8c42bfce923982dd3d1119ce68c.php";s:4:"1309";s:83:"var/cache/code/core/globalPageTsConfig_37948cdfb404d8c42bfce923982dd3d1119ce68c.php";s:4:"0f8c";s:84:"var/cache/code/core/middlewares_backend_37948cdfb404d8c42bfce923982dd3d1119ce68c.php";s:4:"1efe";s:85:"var/cache/code/core/middlewares_frontend_37948cdfb404d8c42bfce923982dd3d1119ce68c.php";s:4:"b730";s:43:"var/cache/code/core/sites-configuration.php";s:4:"a169";s:73:"var/cache/code/core/tca_base_37948cdfb404d8c42bfce923982dd3d1119ce68c.php";s:4:"7ecd";s:67:"var/cache/code/core/typo3_cd-20fac9b3c1545ede-table-be_sessions.php";s:4:"a74f";s:64:"var/cache/code/core/typo3_cd-20fac9b3c1545ede-table-be_users.php";s:4:"22aa";s:66:"var/cache/code/core/typo3_cd-20fac9b3c1545ede-table-cache_hash.php";s:4:"22a8";s:71:"var/cache/code/core/typo3_cd-20fac9b3c1545ede-table-cache_hash_tags.php";s:4:"1022";s:70:"var/cache/code/core/typo3_cd-20fac9b3c1545ede-table-cache_rootline.php";s:4:"c276";s:75:"var/cache/code/core/typo3_cd-20fac9b3c1545ede-table-cache_rootline_tags.php";s:4:"5e25";s:61:"var/cache/code/core/typo3_cd-20fac9b3c1545ede-table-pages.php";s:4:"27f5";s:67:"var/cache/code/core/typo3_cd-20fac9b3c1545ede-table-sys_history.php";s:4:"5504";s:73:"var/cache/code/core/typo3_cd-20fac9b3c1545ede-table-sys_lockedrecords.php";s:4:"eb62";s:63:"var/cache/code/core/typo3_cd-20fac9b3c1545ede-table-sys_log.php";s:4:"6555";s:68:"var/cache/code/core/typo3_cd-20fac9b3c1545ede-table-sys_registry.php";s:4:"964b";s:91:"var/cache/code/di/DependencyInjectionContainer_37948cdfb404d8c42bfce923982dd3d1119ce68c.php";s:4:"c8e9";s:102:"var/cache/code/fluid_template/Default_action_Backend_Main_793253ff1e1af98b02023c98b3a0e4e8e03d6243.php";s:4:"de41";s:107:"var/cache/code/fluid_template/Default_action_Form_EditDocument_82a4d57ec347e3aaee52ff8f5e69eb5b92ad7ea3.php";s:4:"0df3";s:113:"var/cache/code/fluid_template/Default_action_Login_UserPassLoginForm_6d3b3db1dce0223caaddab592aaaf7c3306e7a64.php";s:4:"8b25";s:111:"var/cache/code/fluid_template/Default_action_PageLayout_PageLayout_4dc992ebbb6901f4bd0386d6099c52b3b027f8db.php";s:4:"42ca";s:119:"var/cache/code/fluid_template/Default_action_PageLayout_PageModuleNoAccess_e646a7130928f8d81a6a3f8222d6841a101622e0.php";s:4:"a798";s:111:"var/cache/code/fluid_template/Default_action_PageLayout_PageModule_d3131354e4bd76e5edbaf552f01c14a50ec14438.php";s:4:"ca1b";s:132:"var/cache/code/fluid_template/Default_action_ToolbarItems_ClearCacheToolbarItemDropDown_99b8ce35bec593f1d40e34793e22b96b8244ceb0.php";s:4:"3b0a";s:124:"var/cache/code/fluid_template/Default_action_ToolbarItems_ClearCacheToolbarItem_27dcdfe2a57fbd9f585ccd174c8210317048c733.php";s:4:"60ca";s:111:"var/cache/code/fluid_template/Default_action_ToolbarItems_DropDown_e4620de1664263d5791f767f01b162034c2b2a18.php";s:4:"fd7b";s:126:"var/cache/code/fluid_template/Default_action_ToolbarItems_HelpToolbarItemDropDown_5f122104da5298d9fa6938dc6affc0385446bfda.php";s:4:"bdad";s:118:"var/cache/code/fluid_template/Default_action_ToolbarItems_HelpToolbarItem_89dd4b30ad61085377bbe5da41bd4ff8e76330ea.php";s:4:"0831";s:124:"var/cache/code/fluid_template/Default_action_ToolbarItems_LiveSearchToolbarItem_9fa3fd8cc2bcc9bd367b0a4486c6b94e560f186e.php";s:4:"9ac0";s:130:"var/cache/code/fluid_template/Default_action_ToolbarItems_ShortcutToolbarItemDropDown_ee873a38abc0a83b3b06b808aa51a66b81c56cc0.php";s:4:"a38f";s:126:"var/cache/code/fluid_template/Default_action_ToolbarItems_ShortcutToolbarItemItem_e8e4882ec2054efdc619375bf5582f01220c0a73.php";s:4:"78c2";s:128:"var/cache/code/fluid_template/Default_action_ToolbarItems_SystemInformationDropDown_db8b42a977c71c5abba6d200fe62301a9e37fd4c.php";s:4:"52b5";s:131:"var/cache/code/fluid_template/Default_action_ToolbarItems_SystemInformationToolbarItem_b3a6aa9bd45d7eb9fe3362e40cf52a3f7b824687.php";s:4:"400a";s:114:"var/cache/code/fluid_template/Default_action_ToolbarItems_ToolbarItem_5643a667d623600075554e86921b351e39e94b2b.php";s:4:"d9ae";s:126:"var/cache/code/fluid_template/Default_action_ToolbarItems_UserToolbarItemDropDown_c320a04a9338471e436957db21cc98cd68a01cf7.php";s:4:"edfc";s:118:"var/cache/code/fluid_template/Default_action_ToolbarItems_UserToolbarItem_bc71b5e566b6efabbb7d51d419485e8129695b9f.php";s:4:"be08";s:92:"var/cache/code/fluid_template/layout_Login_html_0c07e8eacd773adbdef081e6f0a67ee2c3846444.php";s:4:"7a4c";s:93:"var/cache/code/fluid_template/layout_Module_html_1e3fe4d4198564a081a2bbecf4b36560eab33300.php";s:4:"5d74";s:101:"var/cache/code/fluid_template/partial_Backend_ModuleMenu_8c32b6a11a6b9fc61581b85ff9ecaca367a23a5f.php";s:4:"156c";s:97:"var/cache/code/fluid_template/partial_Backend_Topbar_1a32026456376d4d49ec0518e6b99599a2c2bf1a.php";s:4:"ec8a";s:92:"var/cache/code/fluid_template/partial_ButtonBar_413443dc68e8df8c35c305a7bff2f80f8058792e.php";s:4:"0f67";s:92:"var/cache/code/fluid_template/partial_DocHeader_08a9e8fa42f35a95fd107c064bf1b8c80b2ce06c.php";s:4:"b924";s:98:"var/cache/code/fluid_template/partial_Login_LoginNews_3a1997f41746dcb43b0791b7a60baf1926a77e0f.php";s:4:"dc2c";s:106:"var/cache/code/fluid_template/partial_Menus_SelectBoxJumpMenu_2bd44b597b9daf6db8de24c343f96b9b2f8d42b4.php";s:4:"548f";s:111:"var/cache/code/fluid_template/partial_PageLayout_Grid_ColumnHeader_7618e8078d711ee6bfcc31a8e0cc64f758f0f71e.php";s:4:"9aa9";s:111:"var/cache/code/fluid_template/partial_PageLayout_Grid_ColumnHeader_d80a102d686b216022df73e5e2097a37c427c9b0.php";s:4:"4490";s:105:"var/cache/code/fluid_template/partial_PageLayout_Grid_Column_3e5549b5f206e22b574c373ad56ac183af85573d.php";s:4:"16f8";s:109:"var/cache/code/fluid_template/partial_PageLayout_LanguageColumns_49a802cab34b083e3341ad5132f78120413d27e0.php";s:4:"f649";s:114:"var/cache/code/fluid_template/partial_PageLayout_RecordDefault_Footer_b8c979637ae50653283163d90ad5bef7f93be858.php";s:4:"8eb3";s:114:"var/cache/code/fluid_template/partial_PageLayout_RecordDefault_Header_d6d7ce3b5a5f0e8af802e16beb8c426c00961e9d.php";s:4:"176d";s:115:"var/cache/code/fluid_template/partial_PageLayout_RecordDefault_Preview_2d0e80b0a7590ab80f8690599af3c4b9c819fa2b.php";s:4:"cf9c";s:100:"var/cache/code/fluid_template/partial_PageLayout_Record_61434ee5867809706569d3023d82fe25774654ad.php";s:4:"ba16";s:100:"var/cache/code/fluid_template/partial_PageLayout_Record_a71e87ddca31c10bd1c5bf3561b6aa6dc9a81b8a.php";s:4:"f618";s:107:"var/cache/code/fluid_template/partial_ToolbarItems_ToolbarItem_de9ab87829e643f3cb9fbecc7b6f941b86ab3237.php";s:4:"bc9e";s:92:"var/cache/code/typoscript/string-backend-layout-4332963f207ed32205fc81c147c5093daa685d6e.php";s:4:"b71a";s:92:"var/cache/code/typoscript/string-backend-layout-a851607f0c21c73b2d4dec3363204d0a116da8ef.php";s:4:"ebed";s:92:"var/cache/code/typoscript/string-backend-layout-ce00e34878f84f45cddc867bde26af8102a85ad3.php";s:4:"8fe5";s:75:"var/cache/data/assets/BackendIcons_37948cdfb404d8c42bfce923982dd3d1119ce68c";s:4:"0c9c";s:72:"var/cache/data/assets/ImportMap_37948cdfb404d8c42bfce923982dd3d1119ce68c";s:4:"a13b";s:52:"var/cache/data/l10n/055d2dea7c351ea913baae66e561d327";s:4:"429e";s:52:"var/cache/data/l10n/1b4162e8f0bb7f02f6043f259deb6375";s:4:"1e2f";s:52:"var/cache/data/l10n/1dd891656ecb67559431895d6f80ccb1";s:4:"8416";s:52:"var/cache/data/l10n/329425bba347f57ce74da1f8ce4ea389";s:4:"ed13";s:52:"var/cache/data/l10n/3c651733383a4d60c50f3a93eea6aa9c";s:4:"1175";s:52:"var/cache/data/l10n/4051e7e1c42885a499642502dce0db0e";s:4:"a7c7";s:52:"var/cache/data/l10n/5627d4f7a3ef842a2b87973b94e0b9c8";s:4:"3200";s:52:"var/cache/data/l10n/5cee450e14fd7bdb64a0d49408ed9a24";s:4:"b87e";s:52:"var/cache/data/l10n/5cf9e9643079d10f11db573924c8a32d";s:4:"40cd";s:52:"var/cache/data/l10n/634e8d0bf0dbb4a7835de5c1dd9a165d";s:4:"3658";s:52:"var/cache/data/l10n/670069fa44061f5a785d5be10b8d6fbc";s:4:"667c";s:52:"var/cache/data/l10n/7117ccdbbe3b3b040fcff2d29211ceea";s:4:"cf2e";s:52:"var/cache/data/l10n/73c0a76727091bcafe4916184710c792";s:4:"fccf";s:52:"var/cache/data/l10n/757e124e1381552c45f78a0c034dd556";s:4:"a396";s:52:"var/cache/data/l10n/79733de5fb83b97bd0566e3b43ae4fd2";s:4:"30bb";s:52:"var/cache/data/l10n/7ae0d6fb424bc72d1240300e65a85684";s:4:"dd51";s:52:"var/cache/data/l10n/82ec5bd0bc6bf0a6ff3781ac08f3aa33";s:4:"4202";s:52:"var/cache/data/l10n/8959866461fa3b0b8f3dedde3d25c981";s:4:"962e";s:52:"var/cache/data/l10n/8baa425c95d7aed5ce3bfa835246e02c";s:4:"2f9a";s:52:"var/cache/data/l10n/8c9a5b0d6db43bdac5f77d4c398cdfb0";s:4:"74e7";s:52:"var/cache/data/l10n/939a8ea234f02e6b8845668abe70b370";s:4:"6580";s:52:"var/cache/data/l10n/9436352b062adca334b47ef279c939f8";s:4:"6701";s:52:"var/cache/data/l10n/98f0a8f1ec79b513eb3125278e17228f";s:4:"3f9c";s:52:"var/cache/data/l10n/9c100f98d8cd396030b295c59fd08805";s:4:"c7ab";s:52:"var/cache/data/l10n/a17b15b9a8d23a35d6eb2aee29f7b985";s:4:"29f4";s:52:"var/cache/data/l10n/ad89a98749fa06f94de9d49171be082e";s:4:"76b8";s:52:"var/cache/data/l10n/b4a9402595e9fa622f8b0260f7101b26";s:4:"5213";s:52:"var/cache/data/l10n/b5982f6643fb67c7a285f9b52d88a53b";s:4:"e1a9";s:52:"var/cache/data/l10n/c710ee5d531006bea96ad6b2200bc197";s:4:"d3e2";s:52:"var/cache/data/l10n/cabcd8c143f424c1cd5a6181e1890375";s:4:"76e2";s:52:"var/cache/data/l10n/cb28c8a0cd5ae9d0403473093b3fb70c";s:4:"0824";s:52:"var/cache/data/l10n/cc59c5d9de1c58f2767710f54f1f1cca";s:4:"4cb3";s:52:"var/cache/data/l10n/cee35d58ad33c331838a9bc50a0943be";s:4:"4b1f";s:52:"var/cache/data/l10n/dcd5466b883d2b812ad4194f7eba63cc";s:4:"9a48";s:52:"var/cache/data/l10n/e7459d760f89e7f9748c942d5d714f8e";s:4:"40cd";s:52:"var/cache/data/l10n/ea486680d1c21335e4ff6b8638064557";s:4:"0014";s:29:"var/charset/csascii_utf-8.tbl";s:4:"fa4d";s:28:"var/log/typo3_3a57bb40f2.log";s:4:"9959";s:28:"var/log/typo3_8dd0a7a209.log";s:4:"e439";s:41:"var/log/typo3_deprecations_8dd0a7a209.log";s:4:"2c79";s:62:"var/session/f8fbad790df02ea89670d28a6dba71e607cd443f/.htaccess";s:4:"f2a3";s:90:"var/session/f8fbad790df02ea89670d28a6dba71e607cd443f/hash_6e8b5e337b3e733bbef19b432cbdb885";s:4:"3d4c";s:63:"var/session/f8fbad790df02ea89670d28a6dba71e607cd443f/index.html";s:4:"0c14";}',
);

