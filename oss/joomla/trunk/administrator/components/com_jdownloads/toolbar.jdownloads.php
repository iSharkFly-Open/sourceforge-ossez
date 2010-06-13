<?php
/**
 * Copyright (C) 2006-2010 YUCHENG HU
 *
 * ----------------------------------------------------------------------------------
 * HA WEBSYSTEMS
 * http://www.hawebs.net
 * http://www.tcivis.com
 *
 * Contact
 * huyuchengus@gmail.com / yuchenghu@hawebs.net
 *
 * ----------------------------------------------------------------------------------
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 *
 * GNU GENERAL PUBLIC LICENSE
 *
 * ----------------------------------------------------------------------------------
 */

defined( '_JEXEC' ) or die( 'Restricted access' );
require_once( $mainframe->getPath( 'toolbar_html' ) );

switch ( $task ) {

		case "new":
		case "edit":
		case "editA":
		case "copy":
		menujlist::EDIT_MENU();
		break;

		case "categories.list":
			menujlist::CATEGORIES_LIST();
		break;

		case "categories.edit":
			menujlist::CATEGORIES_ADD();
		break;

		case "files.list":
			menujlist::FILES_LIST();
		break;

		case "files.edit":
			menujlist::FILES_EDIT();
		break;

        case "files.copy":
            menujlist::FILES_COPY();
        break;
        
        case "license.list":
			menujlist::LICENSE_LIST();
		break;

		case "license.edit":
			menujlist::LICENSE_EDIT();
		break;

        case "templates.menu":
			menujlist::TEMPLATES_MENU();
		break;
		
        case "templates.list.cats":
			menujlist::TEMPLATES_LIST_CATS();
		break;

		case "templates.edit.cats":
			menujlist::TEMPLATES_EDIT_CATS();
		break;

        case "templates.list.files":
			menujlist::TEMPLATES_LIST_FILES();
		break;

		case "templates.edit.files":
			menujlist::TEMPLATES_EDIT_FILES();
		break;
        
        case "templates.list.details":
            menujlist::TEMPLATES_LIST_DETAILS();
        break;

        case "templates.edit.details":
            menujlist::TEMPLATES_EDIT_DETAILS();
        break;        

        case "templates.list.summary":
			menujlist::TEMPLATES_LIST_SUMMARY();
		break;

		case "templates.edit.summary":
			menujlist::TEMPLATES_EDIT_SUMMARY();
		break;
		
        case "css.edit":
    	menujlist::CSS_EDIT();
    	break;

        case "language.edit":
    	menujlist::LANG_EDIT();
    	break;

		case "config.show":
    	menujlist::SETTINGS_MENU();
    	break;

		case "restore":
    	menujlist::RESTORE_MENU();
    	break;

 		case "info":
    	menujlist::INFO_MENU();
    	break;

		default:
		menujlist::_DEFAULT();
		break;
	}
?>