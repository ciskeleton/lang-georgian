<?php

/**
 * ------------------------------------------------------------------------
 * CiSkeleton Admin Language File
 * ------------------------------------------------------------------------
 * This file contains all language lines used in the CSK admin dashboard.
 * Each section is separated by comments for easier navigation and maintenance.
 */

/**
 * ------------------------------------------------------------------------
 * Core Dashboard Section
 * ------------------------------------------------------------------------
 * General terms and messages used across the admin dashboard.
 */
$lang['admin_components'] = 'კომპონენტები';
$lang['admin_content'] = 'კონტენტი';
$lang['admin_database_backup'] = 'მონაცემთა ბაზის სარეზერვო ასლები';
$lang['admin_extensions'] = 'გაფართოებები';
$lang['admin_firewall'] = 'ფაიერვოლი';
$lang['admin_help'] = 'დახმარება';
$lang['admin_languages'] = 'ენები';
$lang['admin_logs'] = 'სისტემის ჟურნალები';
$lang['admin_media'] = 'მედია ბიბლიოთეკა';
$lang['admin_modules'] = 'მოდულები';
$lang['admin_plugins'] = 'პლაგინები';
$lang['admin_reports'] = 'აქტივობის ჟურნალი';
$lang['admin_settings'] = 'სისტემის პარამეტრები';
$lang['admin_sysinfo'] = 'სისტემის ინფორმაცია';
$lang['admin_system'] = 'სისტემა';
$lang['admin_system_firewall'] = 'სისტემის Firewall';
$lang['admin_themes'] = 'თემები';
$lang['admin_updates'] = 'სისტემის განახლებები';
$lang['admin_users'] = 'მომხმარებლები';
$lang['admin_view_site'] = 'საიტის ნახვა';
$lang['per_page'] = 'გვერდზე';

// Generic Messages
$lang['admin_footer_thankyou'] = 'გმადლობთ, რომ ქმნით <a href="%s">%s</a>-ით.';
$lang['admin_items_active_count'] = '=0{აქტიური ელემენტები არ არის.} other{<b>%s</b>-დან აქტიურია <b>#</b> ელემენტი.}';

/**
 * ---------------------------------------------------------------
 * Extension Install Section
 * ---------------------------------------------------------------
 * Language lines for the extension installation section.
 */
$lang['admin_install_error_com'] = 'დაყენება ვერ მოხერხდა: %s';
$lang['admin_install_location_app'] = 'მხოლოდ ეს აპლიკაცია';
$lang['admin_install_location_core'] = 'ყველა აპლიკაცია';
$lang['admin_install_location_select'] = '&#151; აირჩიეთ მდებარეობა &#151;';
$lang['admin_install_update_confirm'] = 'დარწმუნებული ხართ, რომ გსურთ ამ პაკეტის განახლება?';
$lang['admin_install_update_error'] = 'პაკეტის განახლება ვერ მოხერხდა.';
$lang['admin_install_update_skip_confirm'] = 'დარწმუნებული ხართ, რომ გსურთ ამ განახლების გამოტოვება?';
$lang['admin_install_update_skip_error'] = 'ამ განახლების გამოტოვება ვერ მოხერხდა.';
$lang['admin_install_update_skip_success'] = 'განახლება წარმატებით გამოტოვებულია.';
$lang['admin_install_update_success'] = 'პაკეტი წარმატებით განახლდა.';
$lang['admin_install_upload_tip'] = 'დააყენეთ პაკეტი მისი <b>.zip</b> ფაილის აქ ატვირთვით.';

/**
 * ---------------------------------------------------------------
 * Database & Backup Section
 * ---------------------------------------------------------------
 * Language lines for the database management section.
 */
$lang['admin_database_backup_clean_error'] = 'ძველი სარეზერვო ფაილების გასუფთავება ვერ მოხერხდა.';
$lang['admin_database_backup_clean_success'] = 'წაიშალა %d სარეზერვო ფაილი. გათავისუფლდა %d დისკის ადგილი.';
$lang['admin_database_backup_create'] = 'სარეზერვო ასლის შექმნა';
$lang['admin_database_backup_create_confirm'] = 'დარწმუნებული ხართ, რომ გსურთ სარეზერვო ასლის ახლა შექმნა?';
$lang['admin_database_backup_create_error'] = 'სარეზერვო ფაილის შექმნა ვერ მოხერხდა. დარწმუნდით, რომ საქაღალდე <b>%s</b> ჩაწერადია.';
$lang['admin_database_backup_create_success'] = 'მონაცემთა ბაზის სარეზერვო ფაილი <b>%s</b> წარმატებით შეიქმნა.';
$lang['admin_database_backup_delete_confirm'] = 'დარწმუნებული ხართ, რომ გსურთ ამ სარეზერვო ფაილების წაშლა?';
$lang['admin_database_backup_delete_error'] = 'არჩეული სარეზერვო ფაილების წაშლა ვერ მოხერხდა.';
$lang['admin_database_backup_delete_success'] = 'სარეზერვო ფაილები წარმატებით წაიშალა.';
$lang['admin_database_backup_download_error'] = 'არჩეული სარეზერვო ფაილის ჩამოტვირთვა ვერ მოხერხდა.';
$lang['admin_database_backup_download_success'] = 'სარეზერვო ფაილი წარმატებით ჩამოიტვირთა.';
$lang['admin_database_backup_lock_confirm'] = 'დარწმუნებული ხართ, რომ გსურთ ამ სარეზერვო ფაილების ჩაკეტვა?';
$lang['admin_database_backup_lock_error'] = 'არჩეული სარეზერვო ფაილების ჩაკეტვა ვერ მოხერხდა.';
$lang['admin_database_backup_lock_success'] = 'სარეზერვო ფაილები წარმატებით ჩაიკეტა.';
$lang['admin_database_backup_locked_error'] = 'ჩაკეტილი სარეზერვო ფაილების წაშლა ვერ მოხერხდა.';
$lang['admin_database_backup_missing_error'] = 'სარეზერვო ფაილი ვერ მოიძებნა.';
$lang['admin_database_backup_unlock_confirm'] = 'დარწმუნებული ხართ, რომ გსურთ ამ სარეზერვო ფაილების განბლოკვა?';
$lang['admin_database_backup_unlock_error'] = 'არჩეული სარეზერვო ფაილების განბლოკვა ვერ მოხერხდა.';
$lang['admin_database_backup_unlock_success'] = 'სარეზერვო ფაილები წარმატებით განიბლოკა.';
$lang['admin_database_prune'] = 'გასუფთავება';
$lang['admin_database_prune_confirm'] = 'დარწმუნებული ხართ, რომ გსურთ მონაცემთა ბაზის გასუფთავება? შესრულებამდე შეიქმნება სარეზერვო ასლი.';
$lang['admin_database_prune_error'] = 'მონაცემთა ბაზის გასუფთავება ვერ მოხერხდა.';
$lang['admin_database_prune_next'] = 'შემდეგი გასუფთავება: <b>%s</b>';
$lang['admin_database_prune_success'] = 'მონაცემთა ბაზა წარმატებით გასუფთავდა.';

/**
 * ---------------------------------------------------------------
 * System Logs Section
 * ---------------------------------------------------------------
 * Language lines for the system logs section.
 */
$lang['admin_logs_delete'] = 'ჟურნალების წაშლა';
$lang['admin_logs_delete_confirm'] = 'დარწმუნებული ხართ, რომ გსურთ არჩეული ჟურნალის ფაილების წაშლა?';
$lang['admin_logs_delete_error'] = 'ჟურნალის ფაილების წაშლა ვერ მოხერხდა.';
$lang['admin_logs_delete_success'] = 'ჟურნალის ფაილები წარმატებით წაიშალა.';
$lang['admin_logs_error_disabled'] = 'ჟურნალირება ამჟამად ჩართული არ არის.';
$lang['admin_logs_error_empty'] = 'ჟურნალები ვერ მოიძებნა.';
$lang['admin_logs_error_missing'] = 'ჟურნალის ფაილი ვერ მოიძებნა ან ცარიელი იყო.';
$lang['admin_logs_tip'] = 'ჟურნალირებამ შეიძლება სწრაფად შექმნას ძალიან დიდი ფაილები. მოქმედ საიტებზე გაითვალისწინეთ ძველი ფაილების წაშლა.';

/**
 * ---------------------------------------------------------------
 * Emails Section
 * ---------------------------------------------------------------
 * Language lines for the mail queue section.
 */
$lang['admin_emails_delete_confirm'] = 'დარწმუნებული ხართ, რომ გსურთ არჩეული ელფოსტების წაშლა?';
$lang['admin_emails_delete_error'] = 'არჩეული ელფოსტების წაშლა ვერ მოხერხდა.';
$lang['admin_emails_delete_success'] = 'არჩეული ელფოსტები წარმატებით წაიშალა.';
$lang['admin_emails_email_from'] = 'გამგზავნი';
$lang['admin_emails_mail_queue'] = 'ელფოსტის რიგი';
$lang['admin_emails_mailer'] = 'მასობრივი ელფოსტა';
$lang['admin_emails_search'] = 'ელფოსტების ძიება თემით ან შინაარსით...';
$lang['admin_emails_send_error'] = 'ელფოსტის რიგში დამატება ვერ მოხერხდა. გთხოვთ, სცადოთ ხელახლა.';
$lang['admin_emails_send_none'] = 'თქვენს არჩეულ კრიტერიუმებს არცერთი მომხმარებელი არ შეესაბამება.';
$lang['admin_emails_send_success'] = 'ელფოსტა დამატებულია რიგში და მალე გაიგზავნება.';
$lang['admin_emails_send_to_banned'] = 'გაგზავნა დაბლოკილ მომხმარებლებთან.';
$lang['admin_emails_send_to_deleted'] = 'გაგზავნა წაშლილ მომხმარებლებთან.';
$lang['admin_emails_send_to_disabled'] = 'გაგზავნა არააქტიურ მომხმარებლებთან.';

/**
 * ---------------------------------------------------------------
 * Users Section
 * ---------------------------------------------------------------
 * Language lines for the users management section.
 */
$lang['admin_users_add'] = 'მომხმარებლის დამატება';
$lang['admin_users_all_users'] = 'ყველა მომხმარებელი';
$lang['admin_users_ban_confirm'] = 'დარწმუნებული ხართ, რომ გსურთ არჩეული მომხმარებლების დაბლოკვა?';
$lang['admin_users_ban_error'] = 'არჩეული მომხმარებლების დაბლოკვა ვერ მოხერხდა.';
$lang['admin_users_ban_success'] = 'არჩეული მომხმარებლები წარმატებით დაიბლოკა.';
$lang['admin_users_delete_confirm'] = 'დარწმუნებული ხართ, რომ გსურთ არჩეული მომხმარებლების წაშლა?';
$lang['admin_users_delete_error'] = 'არჩეული მომხმარებლების წაშლა ვერ მოხერხდა.';
$lang['admin_users_delete_success'] = 'არჩეული მომხმარებლები წარმატებით წაიშალა.';
$lang['admin_users_disable_confirm'] = 'დარწმუნებული ხართ, რომ გსურთ არჩეული მომხმარებლების გამორთვა?';
$lang['admin_users_disable_error'] = 'არჩეული მომხმარებლების გამორთვა ვერ მოხერხდა.';
$lang['admin_users_disable_success'] = 'არჩეული მომხმარებლები წარმატებით გამოირთო.';
$lang['admin_users_edit'] = 'მომხმარებლის რედაქტირება';
$lang['admin_users_edit_error'] = 'მომხმარებლის განახლება ვერ მოხერხდა.';
$lang['admin_users_edit_success'] = 'მომხმარებელი წარმატებით განახლდა.';
$lang['admin_users_enable_confirm'] = 'დარწმუნებული ხართ, რომ გსურთ არჩეული მომხმარებლების ჩართვა?';
$lang['admin_users_enable_error'] = 'არჩეული მომხმარებლების ჩართვა ვერ მოხერხდა.';
$lang['admin_users_enable_success'] = 'არჩეული მომხმარებლები წარმატებით ჩაირთო.';
$lang['admin_users_groups'] = 'ჯგუფები';
$lang['admin_users_lock_confirm'] = 'დარწმუნებული ხართ, რომ გსურთ არჩეული მომხმარებლების ჩაკეტვა?';
$lang['admin_users_lock_error'] = 'არჩეული მომხმარებლების ჩაკეტვა ვერ მოხერხდა.';
$lang['admin_users_lock_success'] = 'არჩეული მომხმარებლები წარმატებით ჩაიკეტა.';
$lang['admin_users_logged'] = 'სისტემაში შესული მომხმარებლები';
$lang['admin_users_manage'] = 'მომხმარებლების მართვა';
$lang['admin_users_remove_confirm'] = 'დარწმუნებული ხართ, რომ გსურთ არჩეული მომხმარებლებისა და მათი ყველა მონაცემის სამუდამოდ წაშლა?';
$lang['admin_users_remove_error'] = 'არჩეული მომხმარებლებისა და მათი ყველა მონაცემის სამუდამოდ წაშლა ვერ მოხერხდა.';
$lang['admin_users_remove_success'] = 'არჩეული მომხმარებლები და მათი ყველა მონაცემი წარმატებით წაიშალა.';
$lang['admin_users_restore_confirm'] = 'დარწმუნებული ხართ, რომ გსურთ არჩეული მომხმარებლების აღდგენა?';
$lang['admin_users_restore_error'] = 'არჩეული მომხმარებლების აღდგენა ვერ მოხერხდა.';
$lang['admin_users_restore_success'] = 'არჩეული მომხმარებლები წარმატებით აღდგა.';
$lang['admin_users_search'] = 'ძიება სახელით, მომხმარებლის სახელით ან ელფოსტით...';
$lang['admin_users_unban_confirm'] = 'დარწმუნებული ხართ, რომ გსურთ არჩეული მომხმარებლებისთვის ბლოკირების მოხსნა?';
$lang['admin_users_unban_error'] = 'არჩეული მომხმარებლებისთვის ბლოკირების მოხსნა ვერ მოხერხდა.';
$lang['admin_users_unban_success'] = 'არჩეულ მომხმარებლებს ბლოკირება წარმატებით მოეხსნა.';
$lang['admin_users_unlock_confirm'] = 'დარწმუნებული ხართ, რომ გსურთ არჩეული მომხმარებლების განბლოკვა?';
$lang['admin_users_unlock_error'] = 'არჩეული მომხმარებლების განბლოკვა ვერ მოხერხდა.';
$lang['admin_users_unlock_success'] = 'არჩეული მომხმარებლები წარმატებით განიბლოკა.';

/**
 * ---------------------------------------------------------------
 * Reports Section
 * ---------------------------------------------------------------
 * Language lines for the activity log section.
 */
$lang['admin_reports_clear'] = 'ჟურნალების გასუფთავება';
$lang['admin_reports_clear_confirm'] = 'დარწმუნებული ხართ, რომ გსურთ მოქმედებების ჟურნალის გასუფთავება?';
$lang['admin_reports_clear_error'] = 'მოქმედებების ჟურნალის გასუფთავება ვერ მოხერხდა.';
$lang['admin_reports_clear_success'] = 'მოქმედებების ჟურნალი წარმატებით გასუფთავდა.';
$lang['admin_reports_latest_actions'] = 'უახლესი მოქმედებები';

/**
 * ---------------------------------------------------------------
 * Media Library Section
 * ---------------------------------------------------------------
 * Language lines for the media library section.
 */
$lang['admin_media_delete_confirm'] = 'დარწმუნებული ხართ, რომ გსურთ არჩეული ფაილების წაშლა?';
$lang['admin_media_delete_error'] = 'ფაილების წაშლა ვერ მოხერხდა.';
$lang['admin_media_delete_success'] = 'ფაილები წარმატებით წაიშალა.';
$lang['admin_media_file_delete_error'] = 'ფაილის წაშლა ვერ მოხერხდა.';
$lang['admin_media_file_delete_success'] = 'ფაილი წარმატებით წაიშალა.';
$lang['admin_media_file_update_error'] = 'ფაილის განახლება ვერ მოხერხდა.';
$lang['admin_media_file_update_success'] = 'ფაილი წარმატებით განახლდა.';
$lang['admin_media_search'] = 'ძიება სახელით, აღწერით ან ფაილის სახელით...';

/**
 * ---------------------------------------------------------------
 * Modules Section
 * ---------------------------------------------------------------
 * Language lines for the modules management section.
 */
$lang['admin_modules_active_count'] = '=0{აქტიური მოდულები არ არის.} other{<b>%s</b>-დან აქტიურია <b>#</b> მოდული.}';
$lang['admin_modules_add'] = 'მოდულის დამატება';
$lang['admin_modules_delete_confirm'] = 'დარწმუნებული ხართ, რომ გსურთ მოდულის წაშლა: <b>%s</b>?';
$lang['admin_modules_delete_error'] = 'მოდულის წაშლა ვერ მოხერხდა.';
$lang['admin_modules_delete_error_active'] = 'აქტიური მოდულების წაშლა შეუძლებელია.';
$lang['admin_modules_delete_success'] = 'მოდული წარმატებით წაიშალა.';
$lang['admin_modules_disable_all_confirm'] = 'დარწმუნებული ხართ, რომ გსურთ ყველა მოდულის გამორთვა?';
$lang['admin_modules_disable_all_error'] = 'ყველა მოდულის გამორთვა ვერ მოხერხდა.';
$lang['admin_modules_disable_all_success'] = 'ყველა მოდული წარმატებით გამოირთო.';
$lang['admin_modules_disable_confirm'] = 'დარწმუნებული ხართ, რომ გსურთ მოდულის გამორთვა: <b>%s</b>?';
$lang['admin_modules_disable_error'] = 'მოდულის დეაქტივაცია ვერ მოხერხდა.';
$lang['admin_modules_disable_success'] = 'მოდული წარმატებით დეაქტივირდა.';
$lang['admin_modules_enable_all_confirm'] = 'დარწმუნებული ხართ, რომ გსურთ ყველა მოდულის ჩართვა?';
$lang['admin_modules_enable_all_error'] = 'ყველა მოდულის ჩართვა ვერ მოხერხდა.';
$lang['admin_modules_enable_all_success'] = 'ყველა მოდული წარმატებით ჩაირთო.';
$lang['admin_modules_enable_confirm'] = 'დარწმუნებული ხართ, რომ გსურთ მოდულის ჩართვა: <b>%s</b>?';
$lang['admin_modules_enable_error'] = 'მოდულის აქტივაცია ვერ მოხერხდა.';
$lang['admin_modules_enable_success'] = 'მოდული წარმატებით გააქტიურდა.';
$lang['admin_modules_global'] = 'გლობალური მოდული (გაზიარებული)';
$lang['admin_modules_install_confirm'] = 'დარწმუნებული ხართ, რომ გსურთ მოდულის დაინსტალირება: <b>%s</b>?';
$lang['admin_modules_install_error'] = 'მოდულის დაინსტალირება ვერ მოხერხდა.';
$lang['admin_modules_install_success'] = 'მოდული წარმატებით დაინსტალირდა.';
$lang['admin_modules_install_tip'] = 'მოდულები თქვენს საიტს ახალ ფუნქციებსა და შესაძლებლობებს ამატებს. დაათვალიერეთ ხელმისაწვდომი მოდულები <a href="%s" target="_blank" rel="noopener">მოდულების დირექტორიაში</a> ან ატვირთეთ <b>.zip</b> პაკეტად.';
$lang['admin_modules_update_confirm'] = 'დარწმუნებული ხართ, რომ გსურთ ამ მოდულის განახლება?';
$lang['admin_modules_update_error'] = 'მოდულის განახლება ვერ მოხერხდა.';
$lang['admin_modules_update_success'] = 'მოდული წარმატებით განახლდა.';

/**
 * ---------------------------------------------------------------
 * Plugins Section
 * ---------------------------------------------------------------
 * Language lines for the plugins management section.
 */
$lang['admin_plugins_active_count'] = '=0{აქტიური პლაგინები არ არის.} other{<b>%s</b>-დან აქტიურია <b>#</b> პლაგინი.}';
$lang['admin_plugins_add'] = 'პლაგინის დამატება';
$lang['admin_plugins_delete_confirm'] = 'დარწმუნებული ხართ, რომ გსურთ პლაგინის წაშლა: <b>%s</b>?';
$lang['admin_plugins_delete_error'] = 'პლაგინის წაშლა ვერ მოხერხდა.';
$lang['admin_plugins_delete_error_active'] = 'აქტიური დანამატების წაშლა შეუძლებელია.';
$lang['admin_plugins_delete_success'] = 'პლაგინი წარმატებით წაიშალა.';
$lang['admin_plugins_disable_all_confirm'] = 'დარწმუნებული ხართ, რომ გსურთ ყველა პლაგინის გამორთვა?';
$lang['admin_plugins_disable_all_error'] = 'ყველა პლაგინის გამორთვა ვერ მოხერხდა.';
$lang['admin_plugins_disable_all_success'] = 'ყველა პლაგინი წარმატებით გამოირთო.';
$lang['admin_plugins_disable_confirm'] = 'დარწმუნებული ხართ, რომ გსურთ პლაგინის გამორთვა: <b>%s</b>?';
$lang['admin_plugins_disable_error'] = 'პლაგინის დეაქტივაცია ვერ მოხერხდა.';
$lang['admin_plugins_disable_success'] = 'პლაგინი წარმატებით დეაქტივირდა.';
$lang['admin_plugins_enable_all_confirm'] = 'დარწმუნებული ხართ, რომ გსურთ ყველა პლაგინის ჩართვა?';
$lang['admin_plugins_enable_all_error'] = 'ყველა პლაგინის ჩართვა ვერ მოხერხდა.';
$lang['admin_plugins_enable_all_success'] = 'ყველა პლაგინი წარმატებით ჩაირთო.';
$lang['admin_plugins_enable_confirm'] = 'დარწმუნებული ხართ, რომ გსურთ პლაგინის ჩართვა: <b>%s</b>?';
$lang['admin_plugins_enable_error'] = 'პლაგინის აქტივაცია ვერ მოხერხდა.';
$lang['admin_plugins_enable_success'] = 'პლაგინი წარმატებით გააქტიურდა.';
$lang['admin_plugins_global'] = 'გლობალური დანამატი (გაზიარებული)';
$lang['admin_plugins_install_confirm'] = 'დარწმუნებული ხართ, რომ გსურთ დანამატის დაინსტალირება: <b>%s</b>?';
$lang['admin_plugins_install_error'] = 'დანამატის დაინსტალირება ვერ მოხერხდა.';
$lang['admin_plugins_install_success'] = 'დანამატი წარმატებით დაინსტალირდა.';
$lang['admin_plugins_install_tip'] = 'პლაგინები არსებულ ფუნქციებს დამატებითი პარამეტრებით ან ინტეგრაციებით აფართოებს. დააყენეთ <a href="%s" target="_blank" rel="noopener">პლაგინების დირექტორიიდან</a> ან ატვირთეთ <b>.zip</b> ფაილი.';
$lang['admin_plugins_update_confirm'] = 'დარწმუნებული ხართ, რომ გსურთ ამ დანამატის განახლება?';
$lang['admin_plugins_update_error'] = 'დანამატის განახლება ვერ მოხერხდა.';
$lang['admin_plugins_update_success'] = 'დანამატი წარმატებით განახლდა.';

/**
 * ---------------------------------------------------------------
 * Themes Section
 * ---------------------------------------------------------------
 * Language lines for the themes management section.
 */
$lang['admin_themes_add'] = 'თემის დამატება';
$lang['admin_themes_delete_confirm'] = 'დარწმუნებული ხართ, რომ გსურთ თემის წაშლა: <b>%s</b>?';
$lang['admin_themes_delete_error'] = 'თემის წაშლა ვერ მოხერხდა.';
$lang['admin_themes_delete_error_active'] = 'ამჟამად აქტიური თემის წაშლა შეუძლებელია.';
$lang['admin_themes_delete_success'] = 'თემა წარმატებით წაიშალა.';
$lang['admin_themes_disable_confirm'] = 'დარწმუნებული ხართ, რომ გსურთ თემის დეაქტივაცია: <b>%s</b>?';
$lang['admin_themes_disable_error'] = 'თემის დეაქტივაცია ვერ მოხერხდა.';
$lang['admin_themes_disable_error_active'] = 'აქტიური თემის გამორთვა შეუძლებელია.';
$lang['admin_themes_disable_success'] = 'თემა წარმატებით დეაქტივირდა.';
$lang['admin_themes_enable_confirm'] = 'დარწმუნებული ხართ, რომ გსურთ თემის აქტივაცია: <b>%s</b>?';
$lang['admin_themes_enable_error'] = 'თემის აქტივაცია ვერ მოხერხდა.';
$lang['admin_themes_enable_success'] = 'თემა წარმატებით გააქტიურდა.';
$lang['admin_themes_install_confirm'] = 'დარწმუნებული ხართ, რომ გსურთ თემის დაინსტალირება: <b>%s</b>?';
$lang['admin_themes_install_error'] = 'თემის დაინსტალირება ვერ მოხერხდა.';
$lang['admin_themes_install_success'] = 'თემა წარმატებით დაინსტალირდა.';
$lang['admin_themes_install_tip'] = 'თემები ცვლის თქვენი საიტის იერსახესა და განლაგებას. აირჩიეთ <a href="%s" target="_blank" rel="noopener">თემების ბიბლიოთეკიდან</a> ან ატვირთეთ <b>.zip</b> ფაილი საკუთარი თემის დასაყენებლად.';
$lang['admin_themes_none_tip'] = 'ეს აპლიკაცია მუშაობს თემის გარეშე. დააყენეთ თემა საჯარო ინტერფეისის მოსარგებად.';
$lang['admin_themes_update_confirm'] = 'დარწმუნებული ხართ, რომ გსურთ ამ თემის განახლება?';
$lang['admin_themes_update_error'] = 'თემის განახლება ვერ მოხერხდა.';
$lang['admin_themes_update_success'] = 'თემა წარმატებით განახლდა.';

/**
 * ---------------------------------------------------------------
 * Menus Section
 * ---------------------------------------------------------------
 * Language lines for the menu locations section.
 */
$lang['admin_menus'] = 'მენიუები';
$lang['admin_menus_assign_error'] = 'მენიუს მდებარეობების განახლება ვერ მოხერხდა.';
$lang['admin_menus_assign_success'] = 'მენიუს მდებარეობები წარმატებით განახლდა.';
$lang['admin_menus_header'] = 'ხელმისაწვდომია <b>%s</b> მენიუს მდებარეობა.';
$lang['admin_menus_location'] = 'მდებარეობა';
$lang['admin_menus_locations'] = 'მენიუს მდებარეობები';
$lang['admin_menus_manage'] = 'მენიუების მართვა';
$lang['admin_menus_menu'] = 'მინიჭებული მენიუ';
$lang['admin_menus_none'] = '&#151; არცერთი &#151;';

/**
 * ---------------------------------------------------------------
 * Languages Section
 * ---------------------------------------------------------------
 * Language lines for the languages management section.
 */
$lang['admin_languages_add'] = 'ენის დამატება';
$lang['admin_languages_default_confirm'] = 'დარწმუნებული ხართ, რომ გსურთ ეს ენა საიტის ნაგულისხმევ ენად დააყენოთ?';
$lang['admin_languages_default_error'] = 'ნაგულისხმევი ენის შეცვლა ვერ მოხერხდა.';
$lang['admin_languages_default_error_nochange'] = 'ეს ენა უკვე ნაგულისხმევია.';
$lang['admin_languages_default_success'] = 'ნაგულისხმევი ენა წარმატებით შეიცვალა.';
$lang['admin_languages_delete_confirm'] = 'დარწმუნებული ხართ, რომ გსურთ წაშალოთ ენა: <b>%s</b>?';
$lang['admin_languages_delete_error'] = 'ენის წაშლა ვერ მოხერხდა.';
$lang['admin_languages_delete_error_active'] = 'აქტიური ენების წაშლა შეუძლებელია.';
$lang['admin_languages_delete_error_default'] = 'ნაგულისხმევი ენის წაშლა შეუძლებელია.';
$lang['admin_languages_delete_success'] = 'ენა წარმატებით წაიშალა.';
$lang['admin_languages_disable_all_confirm'] = 'დარწმუნებული ხართ, რომ გსურთ ყველა ენის გამორთვა?';
$lang['admin_languages_disable_all_error'] = 'ყველა ენის გამორთვა ვერ მოხერხდა.';
$lang['admin_languages_disable_all_success'] = 'ყველა ენა წარმატებით გამოირთო.';
$lang['admin_languages_disable_confirm'] = 'დარწმუნებული ხართ, რომ გსურთ ენის გამორთვა: <b>%s</b>?';
$lang['admin_languages_disable_error'] = 'ენის გამორთვა ვერ მოხერხდა.';
$lang['admin_languages_disable_error_default'] = 'ნაგულისხმევი ენის გამორთვა შეუძლებელია.';
$lang['admin_languages_disable_error_nochange'] = 'ეს ენა უკვე გამორთულია.';
$lang['admin_languages_disable_success'] = 'ენა წარმატებით გამოირთო.';
$lang['admin_languages_enable_all_confirm'] = 'დარწმუნებული ხართ, რომ გსურთ ყველა ენის ჩართვა?';
$lang['admin_languages_enable_all_error'] = 'ყველა ენის ჩართვა ვერ მოხერხდა.';
$lang['admin_languages_enable_all_success'] = 'ყველა ენა წარმატებით ჩაირთო.';
$lang['admin_languages_enable_confirm'] = 'დარწმუნებული ხართ, რომ გსურთ ენის ჩართვა: <b>%s</b>?';
$lang['admin_languages_enable_error'] = 'ენის ჩართვა ვერ მოხერხდა.';
$lang['admin_languages_enable_error_nochange'] = 'ეს ენა უკვე ჩართულია.';
$lang['admin_languages_enable_success'] = 'ენა წარმატებით ჩაირთო.';
$lang['admin_languages_install_confirm'] = 'დარწმუნებული ხართ, რომ გსურთ ენის დაინსტალირება: <b>%s</b>?';
$lang['admin_languages_install_error'] = 'ენის დაინსტალირება ვერ მოხერხდა.';
$lang['admin_languages_install_success'] = 'ენა წარმატებით დაინსტალირდა.';
$lang['admin_languages_install_tip'] = 'ენები ამატებს თარგმანებს თქვენი საიტის ინტერფეისისა და კონტენტისთვის. დაათვალიერეთ ხელმისაწვდომი ენები <a href="%s" target="_blank" rel="noopener">ენების დირექტორიაში</a> ან ატვირთეთ <b>.zip</b> პაკეტი საკუთარი ენის დასაყენებლად.';
$lang['admin_languages_tip'] = 'ჩართეთ, გამორთეთ და დააყენეთ საიტის ნაგულისხმევი ენა. ჩართული ენები ხელმისაწვდომია საიტის ვიზიტორებისთვის.';
$lang['admin_languages_update_confirm'] = 'დარწმუნებული ხართ, რომ გსურთ ამ ენის განახლება?';
$lang['admin_languages_update_error'] = 'ენის განახლება ვერ მოხერხდა.';
$lang['admin_languages_update_success'] = 'ენა წარმატებით განახლდა.';

/**
 * ---------------------------------------------------------------
 * Package Driver & Installation Messages
 * ---------------------------------------------------------------
 * Language lines for package installation, download, backup, and validation.
 */
$lang['package_already_exists'] = 'პაკეტი უკვე არსებობს.';
$lang['package_archive_download_failed'] = 'პაკეტის არქივის ჩამოტვირთვა ვერ მოხერხდა.';
$lang['package_backup_create_error'] = 'პაკეტის სარეზერვო ასლის შექმნა ვერ მოხერხდა.';
$lang['package_backup_dir_failed'] = 'ვერ მოხერხდა სარეზერვო დირექტორიის შექმნა: %s';
$lang['package_backup_missing'] = 'სარეზერვო ფაილი არ არსებობს.';
$lang['package_backup_path_error'] = 'სარეზერვო ფაილის მისამართის დადგენა ვერ მოხერხდა.';
$lang['package_backup_request_invalid'] = 'არასწორი სარეზერვო მოთხოვნა.';
$lang['package_backup_restore_error'] = 'პაკეტის სარეზერვო ასლის აღდგენა ვერ მოხერხდა.';
$lang['package_catalog_type_unknown'] = 'კატალოგის უცნობი ტიპი.';
$lang['package_checksum_error'] = 'პაკეტის საკონტროლო ჯამის (checksum) შემოწმება ვერ მოხერხდა.';
$lang['package_copy_files_error'] = 'პაკეტის ფაილების დანიშნულების ადგილზე კოპირება ვერ მოხერხდა.';
$lang['package_copy_updates_error'] = 'განახლების ფაილების დანიშნულების ადგილზე კოპირება ვერ მოხერხდა.';
$lang['package_dest_dir_failed'] = 'ვერ მოხერხდა დანიშნულების დირექტორიის შექმნა: %s';
$lang['package_destination_error'] = 'პაკეტის დანიშნულების ადგილის დადგენა ვერ მოხერხდა.';
$lang['package_download_dir_failed'] = 'ვერ მოხერხდა ჩამოტვირთვის დირექტორიის შექმნა: %s';
$lang['package_download_empty'] = 'პაკეტის ჩამოტვირთვამ ცარიელი პასუხი დააბრუნა.';
$lang['package_download_request_invalid'] = 'პაკეტის ჩამოტვირთვის არასწორი მოთხოვნა.';
$lang['package_extract_failed'] = 'ვერ მოხერხდა ZIP არქივის ამოღება: %s';
$lang['package_invalid_lang_files'] = 'არასწორი ენა — დაკარგულია აპლიკაციისთვის სავალდებულო ენის ფაილები.';
$lang['package_invalid_lang_structure'] = 'არასწორი ენა — დაკარგულია admin და/أو ci3 დირექტორიები.';
$lang['package_invalid_missing_info'] = 'არასწორი %s: აკლია "info.php".';
$lang['package_invalid_module_structure'] = 'არასწორი მოდული — დაკარგულია სავალდებულო config და/أو controllers დირექტორიები.';
$lang['package_invalid_plugin_boot'] = 'არასწორი პლაგინი — აკლია "boot.php".';
$lang['package_invalid_plugin_contents'] = 'არასწორი პლაგინი — პლაგინები ვერ შეიცავენ კონტროლერებს ან ხედებს (views).';
$lang['package_invalid_theme_boot'] = 'არასწორი თემა — აკლია "boot.php".';
$lang['package_invalid_theme_views'] = 'არასწორი თემა — აკლია views დირექტორია.';
$lang['package_no_root_dir'] = 'პაკეტი არ შეიცავს მთავარ (root) დირექტორიას.';
$lang['package_not_downloadable'] = 'პაკეტი საჯაროდ ჩამოტვირთვადი არ არის.';
$lang['package_not_in_registry'] = 'პაკეტი მიუწვდომელია საჯარო რეესტრში.';
$lang['package_request_invalid'] = 'არასწორი პაკეტის მოთხოვნა.';
$lang['package_rollback_request_invalid'] = 'არასწორი დაბრუნების (rollback) მოთხოვნა.';
$lang['package_root_mismatch'] = 'პაკეტის არქივის ძირითადი საქაღალდე არ ემთხვევა %s-ს';
$lang['package_single_root_required'] = 'პაკეტი უნდა შეიცავდეს ზუსტად ერთ მთავარ დირექტორიას.';
$lang['package_source_error'] = 'პაკეტის წყაროს დადგენა ვერ მოხერხდა.';
$lang['package_system_core_restricted'] = 'სისტემური კომპონენტების პაკეტებად ინსტალაცია შეუძლებელია.';
$lang['package_temp_dir_failed'] = 'ვერ მოხერხდა დროებითი დირექტორიის შექმნა: %s';
$lang['package_type_unknown'] = 'პაკეტის უცნობი ტიპი.';
$lang['package_update_request_invalid'] = 'პაკეტის განახლების არასწორი მოთხოვნა.';
$lang['package_update_root_mismatch'] = 'განახლების არქივის ძირითადი საქაღალდე არ ემთხვევა %s-ს.';
$lang['package_upload_dir_failed'] = 'ვერ მოხერხდა ატვირთვის დირექტორიის შექმნა: %s';
$lang['package_url_invalid'] = 'პაკეტის გავრცელების არასწორი URL.';
$lang['package_write_failed'] = 'ვერ მოხერხდა პაკეტის ჩწერა მისამართზე: %s';
$lang['package_zip_not_found'] = 'პაკეტის ZIP ფაილი არ არსებობს: %s';

/**
 * ---------------------------------------------------------------
 * Updates Section
 * ---------------------------------------------------------------
 * Language lines for updates section.
 */
$lang['update_available'] = 'ხელმისაწვდომია ახალი განახლებები!';
$lang['update_backup_error'] = 'არსებული პაკეტის სარეზერვო ასლის შექმნა ვერ მოხერხდა. განახლება შეწყდა.';
$lang['update_check_disabled'] = 'განახლებების ავტომატური შემოწმება გამორთულია. ჩართეთ ისინი განახლებების სანახავად.';
$lang['update_check_error'] = 'ამჟამად განახლების შემოწმების გაშვება ვერ მოხერხდა.';
$lang['update_check_success'] = 'განახლების შემოწმება წარმატებით დასრულდა.';
$lang['update_install_error'] = 'პაკეტის დაყენება ვერ მოხერხდა. შენარჩუნდა მიმდინარე ვერსია.';
$lang['update_install_success'] = 'პაკეტი წარმატებით განახლდა უახლეს ვერსიამდე.';
$lang['update_interval_3days'] = 'ყოველ 3 დღეში';
$lang['update_interval_biweekly'] = 'ყოველ 2 კვირაში';
$lang['update_interval_daily'] = 'ყოველდღე';
$lang['update_interval_monthly'] = 'თვეში ერთხელ';
$lang['update_interval_weekly'] = 'კვირაში ერთხელ';
$lang['update_not_available'] = 'თქვენი ვებსაიტი განახლებულია.';
$lang['update_rollback_confirm'] = 'დარწმუნებული ხართ, რომ გსურთ წინა ვერსიის აღდგენა?';
$lang['update_rollback_error'] = 'წინა ვერსიის აღდგენა ვერ მოხერხდა. შესაძლოა საჭირო იყოს ხელით ჩარევა.';
$lang['update_rollback_success'] = 'წინა ვერსია წარმატებით აღდგა.';
$lang['updates_available'] = 'ხელმისაწვდომი განახლებები';
$lang['updates_check_now'] = 'ახლავე შემოწმება';
$lang['updates_check_now_confirm'] = 'დარწმუნებული ხართ, რომ გსურთ განახლებების ახლა შემოწმება?';
$lang['updates_current_version'] = 'მიმდინარე ვერსია';
$lang['updates_enable'] = 'განახლებების ჩართვა';
$lang['updates_last_check'] = 'ბოლო შემოწმება: %s';
$lang['updates_latest_version'] = 'უახლესი ვერსია';
$lang['updates_next_check'] = 'შემდეგი დაგეგმილი შემოწმება: %s';
$lang['updates_previous_version'] = 'წინა ვერსია';
$lang['updates_recent'] = 'ბოლო დროს განახლებული';

/**
 * ---------------------------------------------------------------
 * Firewall Section
 * ---------------------------------------------------------------
 * Language lines for the system firewall section.
 */
$lang['admin_firewall_ban_error'] = 'მითითებული IP მისამართის დაბლოკვა ვერ მოხერხდა.';
$lang['admin_firewall_ban_success'] = 'IP მისამართი წარმატებით დაიბლოკა.';
$lang['admin_firewall_block_ip'] = 'IP მისამართის დაბლოკვა';
$lang['admin_firewall_delete_confirm'] = 'დარწმუნებული ხართ, რომ გსურთ არჩეული IP მისამართების განბლოკვა?';
$lang['admin_firewall_delete_error'] = 'არჩეული IP მისამართების განბლოკვა ვერ მოხერხდა.';
$lang['admin_firewall_delete_success'] = 'არჩეული IP მისამართები წარმატებით განიბლოკა.';
$lang['admin_firewall_duration'] = 'დაბლოკვის ხანგრძლივობა';
$lang['admin_firewall_permanent'] = 'სამუდამო';
$lang['admin_firewall_reason'] = 'დაბლოკვის მიზეზი';
$lang['admin_firewall_tip'] = 'ნახეთ და მართეთ Firewall-ის მიერ განმეორებითი დარღვევების ან საეჭვო აქტივობის გამო დაბლოკილი IP მისამართები.';

// Settings
$lang['404_ban_duration'] = '404 დაბლოკვის ხანგრძლივობა';
$lang['404_threshold'] = '404 დარღვევების ლიმიტი';
$lang['uri_ban_duration'] = 'URI დაბლოკვის ხანგრძლივობა';
$lang['uri_strike_threshold'] = 'URI დარღვევების ლიმიტი';
