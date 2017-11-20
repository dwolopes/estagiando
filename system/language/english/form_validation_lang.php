<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2015, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (http://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2015, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['form_validation_required']		= 'O campo {field} é obrigatório.';
$lang['form_validation_isset']			= 'O campo {field} precisa de um valor.';
$lang['form_validation_valid_email']		= 'O campo {field} deve conter um e-mail válido.';
$lang['form_validation_valid_emails']		= 'O campo {field} deve conter um endereço válido.';
$lang['form_validation_valid_url']		= 'O campo {field} deve conter uma URL válida.';
$lang['form_validation_valid_ip']		= 'O campo {field} deve conter um IP válido.';
$lang['form_validation_min_length']		= 'O campo {field} deve ser de no mínimo {param} caracteres.';
$lang['form_validation_max_length']		= 'O campo {field} não pode exceder {param} caracteres.';
$lang['form_validation_exact_length']		= 'O campo {field} deve ter exatamente {param} caracteres..';
$lang['form_validation_alpha']			= 'O campo {field} pode conter letras.';
$lang['form_validation_alpha_numeric']		= 'O campo {field} deve conter caracteres alpha-numerico.';
$lang['form_validation_alpha_numeric_spaces']	= 'O campo {field} deve conter caracteres alpha-numerico e espaços.';
$lang['form_validation_alpha_dash']		= 'O campo {field} deve conter alpha-numericos e underscores caracteres.';
$lang['form_validation_numeric']		= 'O campo {field} só pode conter números.';
$lang['form_validation_is_numeric']		= 'O campo {field} só pode conter números.';
$lang['form_validation_integer']		= 'O campo {field} deve conter valores inteiros.';
$lang['form_validation_regex_match']		= 'O campo {field} não está no formato correto.';
$lang['form_validation_matches']		= 'O campo {field} não é igual ao campo {param} .';
$lang['form_validation_differs']		= 'O campo  {field} deve ser diferente do campo {param}.';
$lang['form_validation_is_unique'] 		= 'O campo {field} deve ser único.';
$lang['form_validation_is_natural']		= 'O campo {field} só pode conter digítos.';
$lang['form_validation_is_natural_no_zero']	= 'O campo {field}deve conter difítos e deve ser maior que zero.';
$lang['form_validation_decimal']		= 'O campo {field} deve conter números decimais..';
$lang['form_validation_less_than']		= 'O campo {field} deve conter um número menos que {param}.';
$lang['form_validation_less_than_equal_to']	= 'O campo {field} deve conter um número menos que ou igual a {param}.';
$lang['form_validation_greater_than']		= 'O campo {field} deve conter um número maios que {param}.';
$lang['form_validation_greater_than_equal_to']	= 'O campo {field} deve conter um número maios que ou igual a {param}.';
$lang['form_validation_error_message_not_set']	= ' Não foi possível verificar uma mensagem de erros em relação ao seu campo {field}.';
$lang['form_validation_in_list']		= 'O campo  {field} deve ser um entre: {param}.';
