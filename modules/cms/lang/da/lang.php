<?php return [
  'cms_object' => [
    'invalid_file' => 'Ugyldigt filnavn: :name. Filnavne må kun indeholde alphanumeriske karakterer, underscores, bindestreger og punktummer. Eksempler på gyldige navne: page.htm, page, subdirectory/page',
    'invalid_property' => '\':name\' kan ikke angives',
    'file_already_exists' => 'Filen \':name\' eksisterer allerede.',
    'error_saving' => 'Fejl under geming af filen \':name\'. Kontroller venligst skriverettigheder.',
    'error_creating_directory' => 'Fejl ved opretning af mappe :name. Kontroller venligst skriverettigheder.',
    'invalid_file_extension' => 'Ugyldig filendelse: :invalid. Tilladte endelser: :allowed.',
    'error_deleting' => 'Fejl under sletning af skabelonfil \':name\'. Kontroller venligst skriverettigheder.',
    'delete_success' => 'Slettede skabeloner: :count.',
    'file_name_required' => 'Filnavnet er påkrævet.',
    'safe_mode_enabled' => 'sikkerhedstilstand er aktiveret.',
  ],
  'dashboard' => [
    'active_theme' => [
      'widget_title_default' => 'Hjemmeside',
      'online' => 'Online',
      'maintenance' => 'Under vedligeholdelse',
      'manage_themes' => 'Administrer temaer',
    ],
  ],
  'theme' => [
    'active' => [
      'not_set' => 'Det aktive tema er ikke sat.',
      'not_found' => 'Det aktive tema kunne ikke findes.',
    ],
    'edit' => [
      'not_set' => 'The edit theme is not set.',
      'not_found' => 'The edit theme is not found.',
      'not_match' => 'The object you\'re trying to access doesn\'t belong to the theme being edited. Please reload the page.',
    ],
  ],
  'maintenance' => [],
  'page' => [
    'not_found_name' => 'Sidenavnet \':name\' kunne ikke findes',
    'not_found' => [
      'label' => 'Siden findes ikke',
      'help' => 'Den efterspurgte side findes ikke.',
    ],
    'custom_error' => [
      'label' => 'Side fejl',
      'help' => 'Der skete desværre en fejl, og siden kan derfor ikke vises.',
    ],
    'menu_label' => 'Sider',
    'unsaved_label' => 'Ugemte side(r)',
    'no_list_records' => 'Ingen sider fundet',
    'new' => 'Ny side',
    'invalid_url' => 'Ugyldigt URL format. URL\'en skal starte med en skråstreg og kan indeholde tal, latinske bogstaver og følgende symboler: ._-[]:?|/+*^$',
    'delete_confirm_multiple' => 'Slet de valgte sider?',
    'delete_confirm_single' => 'Slet denne side?',
    'no_layout' => '-- Intet layout --',
  ],
  'layout' => [
    'not_found_name' => 'Layoutet \':name\' kunne ikke findes',
    'menu_label' => 'Layouts',
    'unsaved_label' => 'Ugemt(e) layout(s)',
    'no_list_records' => 'Ingen layouts fundet',
    'new' => 'Nyt layout',
    'delete_confirm_multiple' => 'Slet de valgte layouts?',
    'delete_confirm_single' => 'Slet dette layout?',
  ],
  'partial' => [
    'not_found_name' => 'Partialen \':name\' kunne ikke findes.',
    'invalid_name' => 'Ugyldigt partial navn: :name.',
    'menu_label' => 'Partials',
    'unsaved_label' => 'Ugemt(e) partial(s)',
    'no_list_records' => 'Ingen partials fundet',
    'delete_confirm_multiple' => 'Slet de valgte partials?',
    'delete_confirm_single' => 'Slet denne partial?',
    'new' => 'Ny partial',
  ],
  'content' => [
    'not_found_name' => 'Indholdsfilen \':name\' kunne ikke findes.',
    'menu_label' => 'Indhold',
    'unsaved_label' => 'Ugemt indhold',
    'no_list_records' => 'Ingen indholdsfiler fundet',
    'delete_confirm_multiple' => 'Slet valgte indholdsfiler eller mapper?',
    'delete_confirm_single' => 'Slet denne indholdsfil?',
    'new' => 'Ny indholdsfil',
  ],
  'ajax_handler' => [
    'invalid_name' => 'Ugyldig AJAX handler navn: :name.',
    'not_found' => 'AJAX handler \':name\' kunne ikke findes.',
  ],
  'cms' => [
    'menu_label' => 'CMS',
  ],
  'sidebar' => [
    'add' => 'Tilføj',
    'search' => 'Søg...',
  ],
  'editor' => [
    'settings' => 'Indstillinger',
    'title' => 'Titel',
    'new_title' => 'Ny side titel',
    'url' => 'URL',
    'filename' => 'Filnavn',
    'layout' => 'Layout',
    'description' => 'Beskrivelse',
    'preview' => 'Forhåndsvisning',
    'meta' => 'Meta',
    'meta_title' => 'Metatitel',
    'meta_description' => 'Metabeskrivelse',
    'markup' => 'Markup',
    'code' => 'Kode',
    'content' => 'Indhold',
    'hidden' => 'Gemt',
    'hidden_comment' => 'Gemte sider kan kun tilgås af backendbrugere.',
    'enter_fullscreen' => 'Start fuld skærm',
    'exit_fullscreen' => 'Afslut fuld skærm',
    'open_searchbox' => 'Åben søgeboks',
    'open_replacebox' => 'Åben erstartningsboks',
  ],
  'asset' => [
    'menu_label' => 'Assets',
    'unsaved_label' => 'Ugemt(e) asset(s)',
    'drop_down_add_title' => 'Tilføj...',
    'drop_down_operation_title' => 'Action...',
    'upload_files' => 'Upload file(r)',
    'create_file' => 'Opret fil',
    'create_directory' => 'Opret mappe',
    'directory_popup_title' => 'Ny mappe',
    'directory_name' => 'Mappenavn',
    'rename' => 'Omdøb',
    'delete' => 'Slet',
    'move' => 'Flyt',
    'select' => 'Vælg',
    'new' => 'Ny fil',
    'rename_popup_title' => 'Omdøb',
    'rename_new_name' => 'Nyt navn',
    'invalid_path' => 'Stien må kun indeholde tal, latinske bogstaver, mellemrum og følgende tegn: ._-/',
    'error_deleting_file' => 'Fejl ved sletning af fil :name.',
    'error_deleting_dir_not_empty' => 'Fejl ved sletning af mappe :name. Mappen er ikke tom.',
    'error_deleting_dir' => 'Fejl ved sletning af mappe :name.',
    'invalid_name' => 'Navn må kun indeholde tal, latinske bogstaver, mellemrum og følgende tegn: ._-/',
    'original_not_found' => 'Den originale fil eller mappe kunne ikke findes',
    'already_exists' => 'Fil eller mappe med dette navn, eksisterer allerede',
    'error_renaming' => 'Fejl ved omdøbning af fil eller mappe',
    'name_cant_be_empty' => 'Navn skal udfyldes',
    'too_large' => 'Den uploadede fil er for stor. Den størst tilladte filstørrelse er :max_size',
    'type_not_allowed' => 'Kun følgende filtyper tilladt: :allowed_types',
    'file_not_valid' => 'Filen er ikke gyldig',
    'error_uploading_file' => 'Fejl ved upload af fil \':name\': :error',
    'move_please_select' => 'Vælg venligst',
    'move_destination' => 'Destinationsmappe',
    'move_popup_title' => 'Flyt assets',
    'move_button' => 'Flyt',
    'selected_files_not_found' => 'Valgte filer ikke fundet',
    'select_destination_dir' => 'Vælg venligst en destinationsmappe',
    'destination_not_found' => 'Destinationsmappe ikke fundet',
    'error_moving_file' => 'Fejl ved flytning af fil :file',
    'error_moving_directory' => 'Fejl ved flytning af mappe :dir',
    'error_deleting_directory' => 'Fejl ved sletning af den originale mappe :dir',
    'path' => 'Sti',
  ],
  'component' => [
    'menu_label' => 'Komponenter',
    'invalid_request' => 'Skabelonen kan ikke gemmes, pga. ugyldigt komponentdata.',
    'no_records' => 'Ingen komponenter fundet',
    'not_found' => 'Komponentet \':name\' kunne ikke findes.',
    'method_not_found' => 'Komponentet \':name\' indeholder ikke metoden \':method\'.',
  ],
  'template' => [
    'invalid_type' => 'Ukendt skabelontype.',
    'not_found' => 'Skabelon kunne ikke findes.',
    'saved' => 'Skabelon blev gemt.',
  ],
  'permissions' => [
    'name' => 'CMS',
    'manage_content' => 'Administrer indholdsfiler',
    'manage_assets' => 'Administrer assets - billeder, JavaScript filer, CSS filer',
    'manage_pages' => 'Opret, rediger og slet CMS sider',
    'manage_layouts' => 'Opret, rediger og slet CMS layouts',
    'manage_partials' => 'Opret, rediger og slet CMS partials',
    'manage_themes' => 'aktiver, deaktiver og konfigurer CMS temaer',
  ],
];