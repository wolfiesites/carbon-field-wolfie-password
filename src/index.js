/**
 * External dependencies.
 */
import { registerFieldType } from '@carbon-fields/core';

/**
 * Internal dependencies.
 */
import './style.scss';
import Wolfie_Password_Field from './main';

registerFieldType( 'wolfie_password', Wolfie_Password_Field );
