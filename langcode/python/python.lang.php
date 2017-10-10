<?php 
class lang_python_lang extends lime_parser {
var $qi = 0;
var $i = array (
  0 => 
  array (
    'stmt_loads' => 's 1',
    'stmt_block' => 's 270',
    'simple_stmt' => 's 4',
    'compound_stmt' => 's 5',
    'small_stmt' => 's 6',
    'expr_stmt' => 's 8',
    'print_stmt' => 's 9',
    'flow_stmt' => 's 10',
    'import_stmt' => 's 11',
    'import_name' => 's 12',
    'import_from' => 's 13',
    'IMPORT' => 's 14',
    'FROM' => 's 25',
    'DEF' => 's 36',
    '\'funcdef\'25' => 's 201',
    'testlist' => 's 203',
    'if_stmt' => 's 232',
    'while_stmt' => 's 233',
    'funcdef' => 's 234',
    'classdef' => 's 235',
    'if_stmt_simple' => 's 236',
    'if_stmt_with_else' => 's 237',
    'IF' => 's 238',
    '\'if_stmt_simple\'76' => 's 241',
    '\'if_stmt_with_else\'78' => 's 243',
    '\'if_stmt_with_else\'79' => 's 247',
    'WHILE' => 's 249',
    'PRINT' => 's 223',
    'return_stmt' => 's 225',
    'RETURN' => 's 226',
    'test' => 's 207',
    'or_test' => 's 57',
    'lambdef' => 's 62',
    'and_test' => 's 63',
    'not_test' => 's 66',
    'NOT' => 's 69',
    'comparison' => 's 71',
    'expr' => 's 72',
    'xor_expr' => 's 75',
    'and_expr' => 's 78',
    'shift_expr' => 's 81',
    'arith_expr' => 's 84',
    'term' => 's 87',
    'factor' => 's 90',
    'PLUS' => 's 93',
    'MINUS' => 's 95',
    'TILDE' => 's 97',
    'power' => 's 99',
    'atom' => 's 100',
    'SBO' => 's 104',
    'BO' => 's 111',
    'NAME' => 's 114',
    'NUMBER' => 's 115',
    'STRING' => 's 116',
    'TRIPLEDOT' => 's 117',
    'NONE' => 's 118',
    'TRUE' => 's 119',
    'FALSE' => 's 120',
    'CLASS' => 's 257',
    '\'classdef\'173' => 's 268',
    'stmt_start' => 's 271',
    '\'start\'' => 'a \'start\'',
  ),
  1 => 
  array (
    'ENDMARKER' => 's 2',
    'stmt_block' => 's 3',
    'simple_stmt' => 's 4',
    'compound_stmt' => 's 5',
    'small_stmt' => 's 6',
    'expr_stmt' => 's 8',
    'print_stmt' => 's 9',
    'flow_stmt' => 's 10',
    'import_stmt' => 's 11',
    'import_name' => 's 12',
    'import_from' => 's 13',
    'IMPORT' => 's 14',
    'FROM' => 's 25',
    'DEF' => 's 36',
    '\'funcdef\'25' => 's 201',
    'testlist' => 's 203',
    'if_stmt' => 's 232',
    'while_stmt' => 's 233',
    'funcdef' => 's 234',
    'classdef' => 's 235',
    'if_stmt_simple' => 's 236',
    'if_stmt_with_else' => 's 237',
    'IF' => 's 238',
    '\'if_stmt_simple\'76' => 's 241',
    '\'if_stmt_with_else\'78' => 's 243',
    '\'if_stmt_with_else\'79' => 's 247',
    'WHILE' => 's 249',
    'PRINT' => 's 223',
    'return_stmt' => 's 225',
    'RETURN' => 's 226',
    'test' => 's 207',
    'or_test' => 's 57',
    'lambdef' => 's 62',
    'and_test' => 's 63',
    'not_test' => 's 66',
    'NOT' => 's 69',
    'comparison' => 's 71',
    'expr' => 's 72',
    'xor_expr' => 's 75',
    'and_expr' => 's 78',
    'shift_expr' => 's 81',
    'arith_expr' => 's 84',
    'term' => 's 87',
    'factor' => 's 90',
    'PLUS' => 's 93',
    'MINUS' => 's 95',
    'TILDE' => 's 97',
    'power' => 's 99',
    'atom' => 's 100',
    'SBO' => 's 104',
    'BO' => 's 111',
    'NAME' => 's 114',
    'NUMBER' => 's 115',
    'STRING' => 's 116',
    'TRIPLEDOT' => 's 117',
    'NONE' => 's 118',
    'TRUE' => 's 119',
    'FALSE' => 's 120',
    'CLASS' => 's 257',
    '\'classdef\'173' => 's 268',
  ),
  2 => 
  array (
    '#' => 'r 0',
  ),
  3 => 
  array (
    'ENDMARKER' => 'r 1',
    'DEF' => 'r 1',
    'WHILE' => 'r 1',
    'CLASS' => 'r 1',
    'PRINT' => 'r 1',
    'IF' => 'r 1',
    'RETURN' => 'r 1',
    'IMPORT' => 'r 1',
    'FROM' => 'r 1',
    'lambdef' => 'r 1',
    'NOT' => 'r 1',
    'PLUS' => 'r 1',
    'MINUS' => 'r 1',
    'TILDE' => 'r 1',
    'SBO' => 'r 1',
    'BO' => 'r 1',
    'NAME' => 'r 1',
    'NUMBER' => 'r 1',
    'STRING' => 'r 1',
    'TRIPLEDOT' => 'r 1',
    'NONE' => 'r 1',
    'TRUE' => 'r 1',
    'FALSE' => 'r 1',
    'DEDENT' => 'r 1',
  ),
  4 => 
  array (
    'ENDMARKER' => 'r 3',
    'DEF' => 'r 3',
    'WHILE' => 'r 3',
    'CLASS' => 'r 3',
    'PRINT' => 'r 3',
    'IF' => 'r 3',
    'RETURN' => 'r 3',
    'IMPORT' => 'r 3',
    'FROM' => 'r 3',
    'lambdef' => 'r 3',
    'NOT' => 'r 3',
    'PLUS' => 'r 3',
    'MINUS' => 'r 3',
    'TILDE' => 'r 3',
    'SBO' => 'r 3',
    'BO' => 'r 3',
    'NAME' => 'r 3',
    'NUMBER' => 'r 3',
    'STRING' => 'r 3',
    'TRIPLEDOT' => 'r 3',
    'NONE' => 'r 3',
    'TRUE' => 'r 3',
    'FALSE' => 'r 3',
    'DEDENT' => 'r 3',
  ),
  5 => 
  array (
    'ENDMARKER' => 'r 4',
    'DEF' => 'r 4',
    'WHILE' => 'r 4',
    'CLASS' => 'r 4',
    'PRINT' => 'r 4',
    'IF' => 'r 4',
    'RETURN' => 'r 4',
    'IMPORT' => 'r 4',
    'FROM' => 'r 4',
    'lambdef' => 'r 4',
    'NOT' => 'r 4',
    'PLUS' => 'r 4',
    'MINUS' => 'r 4',
    'TILDE' => 'r 4',
    'SBO' => 'r 4',
    'BO' => 'r 4',
    'NAME' => 'r 4',
    'NUMBER' => 'r 4',
    'STRING' => 'r 4',
    'TRIPLEDOT' => 'r 4',
    'NONE' => 'r 4',
    'TRUE' => 'r 4',
    'FALSE' => 'r 4',
    'DEDENT' => 'r 4',
  ),
  6 => 
  array (
    'NEWLINE' => 's 7',
  ),
  7 => 
  array (
    'ENDMARKER' => 'r 5',
    'DEF' => 'r 5',
    'WHILE' => 'r 5',
    'CLASS' => 'r 5',
    'PRINT' => 'r 5',
    'IF' => 'r 5',
    'RETURN' => 'r 5',
    'IMPORT' => 'r 5',
    'FROM' => 'r 5',
    'lambdef' => 'r 5',
    'NOT' => 'r 5',
    'PLUS' => 'r 5',
    'MINUS' => 'r 5',
    'TILDE' => 'r 5',
    'SBO' => 'r 5',
    'BO' => 'r 5',
    'NAME' => 'r 5',
    'NUMBER' => 'r 5',
    'STRING' => 'r 5',
    'TRIPLEDOT' => 'r 5',
    'NONE' => 'r 5',
    'TRUE' => 'r 5',
    'FALSE' => 'r 5',
    'DEDENT' => 'r 5',
    'ELSE' => 'r 5',
  ),
  8 => 
  array (
    'NEWLINE' => 'r 6',
  ),
  9 => 
  array (
    'NEWLINE' => 'r 7',
  ),
  10 => 
  array (
    'NEWLINE' => 'r 8',
  ),
  11 => 
  array (
    'NEWLINE' => 'r 9',
  ),
  12 => 
  array (
    'NEWLINE' => 'r 10',
  ),
  13 => 
  array (
    'NEWLINE' => 'r 11',
  ),
  14 => 
  array (
    'dotted_as_names' => 's 15',
    'dotted_name' => 's 16',
    'dotted_as_name' => 's 19',
    'NAME' => 's 22',
  ),
  15 => 
  array (
    'NEWLINE' => 'r 12',
  ),
  16 => 
  array (
    'AS' => 's 17',
    'COLON' => 'r 17',
    'NEWLINE' => 'r 17',
  ),
  17 => 
  array (
    'NAME' => 's 18',
  ),
  18 => 
  array (
    'COLON' => 'r 18',
    'NEWLINE' => 'r 18',
  ),
  19 => 
  array (
    'COLON' => 's 20',
    'NEWLINE' => 'r 21',
  ),
  20 => 
  array (
    'dotted_name' => 's 16',
    'dotted_as_name' => 's 19',
    'dotted_as_names' => 's 21',
    'NAME' => 's 22',
  ),
  21 => 
  array (
    'NEWLINE' => 'r 22',
  ),
  22 => 
  array (
    'DOT' => 's 23',
    'AS' => 'r 23',
    'COLON' => 'r 23',
    'IMPORT' => 'r 23',
    'NEWLINE' => 'r 23',
  ),
  23 => 
  array (
    'NAME' => 's 22',
    'dotted_name' => 's 24',
  ),
  24 => 
  array (
    'AS' => 'r 24',
    'COLON' => 'r 24',
    'IMPORT' => 'r 24',
    'NEWLINE' => 'r 24',
  ),
  25 => 
  array (
    'dotted_name' => 's 26',
    'NAME' => 's 22',
  ),
  26 => 
  array (
    'IMPORT' => 's 27',
  ),
  27 => 
  array (
    'STAR' => 's 28',
    'import_as_names' => 's 29',
    'NAME' => 's 30',
    'import_as_name' => 's 33',
  ),
  28 => 
  array (
    'NEWLINE' => 'r 13',
  ),
  29 => 
  array (
    'NEWLINE' => 'r 14',
  ),
  30 => 
  array (
    'AS' => 's 31',
    'COLON' => 'r 15',
    'NEWLINE' => 'r 15',
  ),
  31 => 
  array (
    'NAME' => 's 32',
  ),
  32 => 
  array (
    'COLON' => 'r 16',
    'NEWLINE' => 'r 16',
  ),
  33 => 
  array (
    'COLON' => 's 34',
    'NEWLINE' => 'r 19',
  ),
  34 => 
  array (
    'NAME' => 's 30',
    'import_as_name' => 's 33',
    'import_as_names' => 's 35',
  ),
  35 => 
  array (
    'NEWLINE' => 'r 20',
  ),
  36 => 
  array (
    'NAME' => 's 37',
  ),
  37 => 
  array (
    'parameters' => 's 38',
    'RBO' => 's 40',
  ),
  38 => 
  array (
    'COLON' => 's 39',
  ),
  39 => 
  array (
    'NEWLINE' => 'r 25',
    'PRINT' => 'r 25',
    'RETURN' => 'r 25',
    'IMPORT' => 'r 25',
    'FROM' => 'r 25',
    'lambdef' => 'r 25',
    'NOT' => 'r 25',
    'PLUS' => 'r 25',
    'MINUS' => 'r 25',
    'TILDE' => 'r 25',
    'SBO' => 'r 25',
    'BO' => 'r 25',
    'NAME' => 'r 25',
    'NUMBER' => 'r 25',
    'STRING' => 'r 25',
    'TRIPLEDOT' => 'r 25',
    'NONE' => 'r 25',
    'TRUE' => 'r 25',
    'FALSE' => 'r 25',
  ),
  40 => 
  array (
    'varargslist' => 's 41',
    'RBC' => 's 43',
    'fpdef_rc_star' => 's 44',
    'fpdef' => 's 186',
    'fpdef_rc' => 's 200',
    'NAME' => 's 176',
    'RBO' => 's 177',
    'DSTAR' => 'r 38',
    'STAR' => 'r 38',
  ),
  41 => 
  array (
    'RBC' => 's 42',
  ),
  42 => 
  array (
    'COLON' => 'r 27',
  ),
  43 => 
  array (
    'COLON' => 'r 28',
  ),
  44 => 
  array (
    'STAR' => 's 45',
    'DSTAR' => 's 50',
    'fpdef_rc' => 's 52',
    'fpdef' => 's 53',
    'NAME' => 's 176',
    'RBO' => 's 177',
  ),
  45 => 
  array (
    'NAME' => 's 46',
  ),
  46 => 
  array (
    'COMMA' => 's 47',
    'RBC' => 'r 30',
  ),
  47 => 
  array (
    'DSTAR' => 's 48',
  ),
  48 => 
  array (
    'NAME' => 's 49',
  ),
  49 => 
  array (
    'RBC' => 'r 29',
  ),
  50 => 
  array (
    'NAME' => 's 51',
  ),
  51 => 
  array (
    'RBC' => 'r 31',
  ),
  52 => 
  array (
    'DSTAR' => 'r 36',
    'NAME' => 'r 36',
    'RBO' => 'r 36',
    'STAR' => 'r 36',
  ),
  53 => 
  array (
    'EQUAL' => 's 54',
    'COMMA' => 's 175',
  ),
  54 => 
  array (
    'test' => 's 55',
    'or_test' => 's 57',
    'lambdef' => 's 62',
    'and_test' => 's 63',
    'not_test' => 's 66',
    'NOT' => 's 69',
    'comparison' => 's 71',
    'expr' => 's 72',
    'xor_expr' => 's 75',
    'and_expr' => 's 78',
    'shift_expr' => 's 81',
    'arith_expr' => 's 84',
    'term' => 's 87',
    'factor' => 's 90',
    'PLUS' => 's 93',
    'MINUS' => 's 95',
    'TILDE' => 's 97',
    'power' => 's 99',
    'atom' => 's 100',
    'SBO' => 's 104',
    'BO' => 's 111',
    'NAME' => 's 114',
    'NUMBER' => 's 115',
    'STRING' => 's 116',
    'TRIPLEDOT' => 's 117',
    'NONE' => 's 118',
    'TRUE' => 's 119',
    'FALSE' => 's 120',
  ),
  55 => 
  array (
    'COMMA' => 's 56',
  ),
  56 => 
  array (
    'DSTAR' => 'r 39',
    'NAME' => 'r 39',
    'RBO' => 'r 39',
    'STAR' => 'r 39',
  ),
  57 => 
  array (
    'IF' => 's 58',
    'ASSIGN' => 'r 91',
    'PLUSEQUAL' => 'r 91',
    'MINUSEQUAL' => 'r 91',
    'STAREQUAL' => 'r 91',
    'SLASHEQUAL' => 'r 91',
    'MODEQUAL' => 'r 91',
    'AMPEQUAL' => 'r 91',
    'PIPEEQUAL' => 'r 91',
    'ACUEQUAL' => 'r 91',
    'LSHIFTEQUAL' => 'r 91',
    'RSHIFTEQUAL' => 'r 91',
    'DSTAREQUAL' => 'r 91',
    'DSLASHEQUAL' => 'r 91',
    'NEWLINE' => 'r 91',
    'COMMA' => 'r 91',
    'EQUAL' => 'r 91',
    'RBC' => 'r 91',
    'COLON' => 'r 91',
    'SBC' => 'r 91',
  ),
  58 => 
  array (
    'or_test' => 's 59',
    'and_test' => 's 63',
    'not_test' => 's 66',
    'NOT' => 's 69',
    'comparison' => 's 71',
    'expr' => 's 72',
    'xor_expr' => 's 75',
    'and_expr' => 's 78',
    'shift_expr' => 's 81',
    'arith_expr' => 's 84',
    'term' => 's 87',
    'factor' => 's 90',
    'PLUS' => 's 93',
    'MINUS' => 's 95',
    'TILDE' => 's 97',
    'power' => 's 99',
    'atom' => 's 100',
    'SBO' => 's 104',
    'BO' => 's 111',
    'NAME' => 's 114',
    'NUMBER' => 's 115',
    'STRING' => 's 116',
    'TRIPLEDOT' => 's 117',
    'NONE' => 's 118',
    'TRUE' => 's 119',
    'FALSE' => 's 120',
  ),
  59 => 
  array (
    'ELSE' => 's 60',
  ),
  60 => 
  array (
    'or_test' => 's 57',
    'test' => 's 61',
    'lambdef' => 's 62',
    'and_test' => 's 63',
    'not_test' => 's 66',
    'NOT' => 's 69',
    'comparison' => 's 71',
    'expr' => 's 72',
    'xor_expr' => 's 75',
    'and_expr' => 's 78',
    'shift_expr' => 's 81',
    'arith_expr' => 's 84',
    'term' => 's 87',
    'factor' => 's 90',
    'PLUS' => 's 93',
    'MINUS' => 's 95',
    'TILDE' => 's 97',
    'power' => 's 99',
    'atom' => 's 100',
    'SBO' => 's 104',
    'BO' => 's 111',
    'NAME' => 's 114',
    'NUMBER' => 's 115',
    'STRING' => 's 116',
    'TRIPLEDOT' => 's 117',
    'NONE' => 's 118',
    'TRUE' => 's 119',
    'FALSE' => 's 120',
  ),
  61 => 
  array (
    'ASSIGN' => 'r 90',
    'PLUSEQUAL' => 'r 90',
    'MINUSEQUAL' => 'r 90',
    'STAREQUAL' => 'r 90',
    'SLASHEQUAL' => 'r 90',
    'MODEQUAL' => 'r 90',
    'AMPEQUAL' => 'r 90',
    'PIPEEQUAL' => 'r 90',
    'ACUEQUAL' => 'r 90',
    'LSHIFTEQUAL' => 'r 90',
    'RSHIFTEQUAL' => 'r 90',
    'DSTAREQUAL' => 'r 90',
    'DSLASHEQUAL' => 'r 90',
    'NEWLINE' => 'r 90',
    'COMMA' => 'r 90',
    'EQUAL' => 'r 90',
    'RBC' => 'r 90',
    'COLON' => 'r 90',
    'SBC' => 'r 90',
  ),
  62 => 
  array (
    'ASSIGN' => 'r 92',
    'PLUSEQUAL' => 'r 92',
    'MINUSEQUAL' => 'r 92',
    'STAREQUAL' => 'r 92',
    'SLASHEQUAL' => 'r 92',
    'MODEQUAL' => 'r 92',
    'AMPEQUAL' => 'r 92',
    'PIPEEQUAL' => 'r 92',
    'ACUEQUAL' => 'r 92',
    'LSHIFTEQUAL' => 'r 92',
    'RSHIFTEQUAL' => 'r 92',
    'DSTAREQUAL' => 'r 92',
    'DSLASHEQUAL' => 'r 92',
    'NEWLINE' => 'r 92',
    'COMMA' => 'r 92',
    'EQUAL' => 'r 92',
    'RBC' => 'r 92',
    'COLON' => 'r 92',
    'SBC' => 'r 92',
  ),
  63 => 
  array (
    'OR' => 's 64',
    'IF' => 'r 94',
    'ASSIGN' => 'r 94',
    'PLUSEQUAL' => 'r 94',
    'MINUSEQUAL' => 'r 94',
    'STAREQUAL' => 'r 94',
    'SLASHEQUAL' => 'r 94',
    'MODEQUAL' => 'r 94',
    'AMPEQUAL' => 'r 94',
    'PIPEEQUAL' => 'r 94',
    'ACUEQUAL' => 'r 94',
    'LSHIFTEQUAL' => 'r 94',
    'RSHIFTEQUAL' => 'r 94',
    'DSTAREQUAL' => 'r 94',
    'DSLASHEQUAL' => 'r 94',
    'NEWLINE' => 'r 94',
    'COMMA' => 'r 94',
    'ELSE' => 'r 94',
    'EQUAL' => 'r 94',
    'RBC' => 'r 94',
    'COLON' => 'r 94',
    'SBC' => 'r 94',
  ),
  64 => 
  array (
    'and_test' => 's 65',
    'not_test' => 's 66',
    'NOT' => 's 69',
    'comparison' => 's 71',
    'expr' => 's 72',
    'xor_expr' => 's 75',
    'and_expr' => 's 78',
    'shift_expr' => 's 81',
    'arith_expr' => 's 84',
    'term' => 's 87',
    'factor' => 's 90',
    'PLUS' => 's 93',
    'MINUS' => 's 95',
    'TILDE' => 's 97',
    'power' => 's 99',
    'atom' => 's 100',
    'SBO' => 's 104',
    'BO' => 's 111',
    'NAME' => 's 114',
    'NUMBER' => 's 115',
    'STRING' => 's 116',
    'TRIPLEDOT' => 's 117',
    'NONE' => 's 118',
    'TRUE' => 's 119',
    'FALSE' => 's 120',
  ),
  65 => 
  array (
    'IF' => 'r 93',
    'ASSIGN' => 'r 93',
    'PLUSEQUAL' => 'r 93',
    'MINUSEQUAL' => 'r 93',
    'STAREQUAL' => 'r 93',
    'SLASHEQUAL' => 'r 93',
    'MODEQUAL' => 'r 93',
    'AMPEQUAL' => 'r 93',
    'PIPEEQUAL' => 'r 93',
    'ACUEQUAL' => 'r 93',
    'LSHIFTEQUAL' => 'r 93',
    'RSHIFTEQUAL' => 'r 93',
    'DSTAREQUAL' => 'r 93',
    'DSLASHEQUAL' => 'r 93',
    'NEWLINE' => 'r 93',
    'COMMA' => 'r 93',
    'ELSE' => 'r 93',
    'EQUAL' => 'r 93',
    'RBC' => 'r 93',
    'COLON' => 'r 93',
    'SBC' => 'r 93',
  ),
  66 => 
  array (
    'AND' => 's 67',
    'OR' => 'r 96',
    'IF' => 'r 96',
    'ASSIGN' => 'r 96',
    'PLUSEQUAL' => 'r 96',
    'MINUSEQUAL' => 'r 96',
    'STAREQUAL' => 'r 96',
    'SLASHEQUAL' => 'r 96',
    'MODEQUAL' => 'r 96',
    'AMPEQUAL' => 'r 96',
    'PIPEEQUAL' => 'r 96',
    'ACUEQUAL' => 'r 96',
    'LSHIFTEQUAL' => 'r 96',
    'RSHIFTEQUAL' => 'r 96',
    'DSTAREQUAL' => 'r 96',
    'DSLASHEQUAL' => 'r 96',
    'NEWLINE' => 'r 96',
    'COMMA' => 'r 96',
    'ELSE' => 'r 96',
    'EQUAL' => 'r 96',
    'RBC' => 'r 96',
    'COLON' => 'r 96',
    'SBC' => 'r 96',
  ),
  67 => 
  array (
    'not_test' => 's 68',
    'NOT' => 's 69',
    'comparison' => 's 71',
    'expr' => 's 72',
    'xor_expr' => 's 75',
    'and_expr' => 's 78',
    'shift_expr' => 's 81',
    'arith_expr' => 's 84',
    'term' => 's 87',
    'factor' => 's 90',
    'PLUS' => 's 93',
    'MINUS' => 's 95',
    'TILDE' => 's 97',
    'power' => 's 99',
    'atom' => 's 100',
    'SBO' => 's 104',
    'BO' => 's 111',
    'NAME' => 's 114',
    'NUMBER' => 's 115',
    'STRING' => 's 116',
    'TRIPLEDOT' => 's 117',
    'NONE' => 's 118',
    'TRUE' => 's 119',
    'FALSE' => 's 120',
  ),
  68 => 
  array (
    'OR' => 'r 95',
    'IF' => 'r 95',
    'ASSIGN' => 'r 95',
    'PLUSEQUAL' => 'r 95',
    'MINUSEQUAL' => 'r 95',
    'STAREQUAL' => 'r 95',
    'SLASHEQUAL' => 'r 95',
    'MODEQUAL' => 'r 95',
    'AMPEQUAL' => 'r 95',
    'PIPEEQUAL' => 'r 95',
    'ACUEQUAL' => 'r 95',
    'LSHIFTEQUAL' => 'r 95',
    'RSHIFTEQUAL' => 'r 95',
    'DSTAREQUAL' => 'r 95',
    'DSLASHEQUAL' => 'r 95',
    'NEWLINE' => 'r 95',
    'COMMA' => 'r 95',
    'ELSE' => 'r 95',
    'EQUAL' => 'r 95',
    'RBC' => 'r 95',
    'COLON' => 'r 95',
    'SBC' => 'r 95',
  ),
  69 => 
  array (
    'NOT' => 's 69',
    'not_test' => 's 70',
    'comparison' => 's 71',
    'expr' => 's 72',
    'xor_expr' => 's 75',
    'and_expr' => 's 78',
    'shift_expr' => 's 81',
    'arith_expr' => 's 84',
    'term' => 's 87',
    'factor' => 's 90',
    'PLUS' => 's 93',
    'MINUS' => 's 95',
    'TILDE' => 's 97',
    'power' => 's 99',
    'atom' => 's 100',
    'SBO' => 's 104',
    'BO' => 's 111',
    'NAME' => 's 114',
    'NUMBER' => 's 115',
    'STRING' => 's 116',
    'TRIPLEDOT' => 's 117',
    'NONE' => 's 118',
    'TRUE' => 's 119',
    'FALSE' => 's 120',
  ),
  70 => 
  array (
    'AND' => 'r 97',
    'OR' => 'r 97',
    'IF' => 'r 97',
    'ASSIGN' => 'r 97',
    'PLUSEQUAL' => 'r 97',
    'MINUSEQUAL' => 'r 97',
    'STAREQUAL' => 'r 97',
    'SLASHEQUAL' => 'r 97',
    'MODEQUAL' => 'r 97',
    'AMPEQUAL' => 'r 97',
    'PIPEEQUAL' => 'r 97',
    'ACUEQUAL' => 'r 97',
    'LSHIFTEQUAL' => 'r 97',
    'RSHIFTEQUAL' => 'r 97',
    'DSTAREQUAL' => 'r 97',
    'DSLASHEQUAL' => 'r 97',
    'NEWLINE' => 'r 97',
    'COMMA' => 'r 97',
    'ELSE' => 'r 97',
    'EQUAL' => 'r 97',
    'RBC' => 'r 97',
    'COLON' => 'r 97',
    'SBC' => 'r 97',
  ),
  71 => 
  array (
    'AND' => 'r 98',
    'OR' => 'r 98',
    'IF' => 'r 98',
    'ASSIGN' => 'r 98',
    'PLUSEQUAL' => 'r 98',
    'MINUSEQUAL' => 'r 98',
    'STAREQUAL' => 'r 98',
    'SLASHEQUAL' => 'r 98',
    'MODEQUAL' => 'r 98',
    'AMPEQUAL' => 'r 98',
    'PIPEEQUAL' => 'r 98',
    'ACUEQUAL' => 'r 98',
    'LSHIFTEQUAL' => 'r 98',
    'RSHIFTEQUAL' => 'r 98',
    'DSTAREQUAL' => 'r 98',
    'DSLASHEQUAL' => 'r 98',
    'NEWLINE' => 'r 98',
    'COMMA' => 'r 98',
    'ELSE' => 'r 98',
    'EQUAL' => 'r 98',
    'RBC' => 'r 98',
    'COLON' => 'r 98',
    'SBC' => 'r 98',
  ),
  72 => 
  array (
    'comp_op' => 's 73',
    'LESS' => 's 163',
    'GREAT' => 's 164',
    'EQUAL' => 's 165',
    'GREATEQUAL' => 's 166',
    'LESSEQUAL' => 's 167',
    'DIFF' => 's 168',
    'NOTEQUAL' => 's 169',
    'IN' => 's 170',
    'NOT' => 's 171',
    'IS' => 's 173',
    'AND' => 'r 100',
    'OR' => 'r 100',
    'IF' => 'r 100',
    'ASSIGN' => 'r 100',
    'PLUSEQUAL' => 'r 100',
    'MINUSEQUAL' => 'r 100',
    'STAREQUAL' => 'r 100',
    'SLASHEQUAL' => 'r 100',
    'MODEQUAL' => 'r 100',
    'AMPEQUAL' => 'r 100',
    'PIPEEQUAL' => 'r 100',
    'ACUEQUAL' => 'r 100',
    'LSHIFTEQUAL' => 'r 100',
    'RSHIFTEQUAL' => 'r 100',
    'DSTAREQUAL' => 'r 100',
    'DSLASHEQUAL' => 'r 100',
    'NEWLINE' => 'r 100',
    'COMMA' => 'r 100',
    'ELSE' => 'r 100',
    'RBC' => 'r 100',
    'COLON' => 'r 100',
    'SBC' => 'r 100',
  ),
  73 => 
  array (
    'expr' => 's 74',
    'xor_expr' => 's 75',
    'and_expr' => 's 78',
    'shift_expr' => 's 81',
    'arith_expr' => 's 84',
    'term' => 's 87',
    'factor' => 's 90',
    'PLUS' => 's 93',
    'MINUS' => 's 95',
    'TILDE' => 's 97',
    'power' => 's 99',
    'atom' => 's 100',
    'SBO' => 's 104',
    'BO' => 's 111',
    'NAME' => 's 114',
    'NUMBER' => 's 115',
    'STRING' => 's 116',
    'TRIPLEDOT' => 's 117',
    'NONE' => 's 118',
    'TRUE' => 's 119',
    'FALSE' => 's 120',
  ),
  74 => 
  array (
    'AND' => 'r 99',
    'OR' => 'r 99',
    'IF' => 'r 99',
    'ASSIGN' => 'r 99',
    'PLUSEQUAL' => 'r 99',
    'MINUSEQUAL' => 'r 99',
    'STAREQUAL' => 'r 99',
    'SLASHEQUAL' => 'r 99',
    'MODEQUAL' => 'r 99',
    'AMPEQUAL' => 'r 99',
    'PIPEEQUAL' => 'r 99',
    'ACUEQUAL' => 'r 99',
    'LSHIFTEQUAL' => 'r 99',
    'RSHIFTEQUAL' => 'r 99',
    'DSTAREQUAL' => 'r 99',
    'DSLASHEQUAL' => 'r 99',
    'NEWLINE' => 'r 99',
    'COMMA' => 'r 99',
    'ELSE' => 'r 99',
    'EQUAL' => 'r 99',
    'RBC' => 'r 99',
    'COLON' => 'r 99',
    'SBC' => 'r 99',
  ),
  75 => 
  array (
    'PIPE' => 's 76',
    'LESS' => 'r 113',
    'GREAT' => 'r 113',
    'EQUAL' => 'r 113',
    'GREATEQUAL' => 'r 113',
    'LESSEQUAL' => 'r 113',
    'DIFF' => 'r 113',
    'NOTEQUAL' => 'r 113',
    'IN' => 'r 113',
    'NOT' => 'r 113',
    'IS' => 'r 113',
    'AND' => 'r 113',
    'OR' => 'r 113',
    'IF' => 'r 113',
    'ASSIGN' => 'r 113',
    'PLUSEQUAL' => 'r 113',
    'MINUSEQUAL' => 'r 113',
    'STAREQUAL' => 'r 113',
    'SLASHEQUAL' => 'r 113',
    'MODEQUAL' => 'r 113',
    'AMPEQUAL' => 'r 113',
    'PIPEEQUAL' => 'r 113',
    'ACUEQUAL' => 'r 113',
    'LSHIFTEQUAL' => 'r 113',
    'RSHIFTEQUAL' => 'r 113',
    'DSTAREQUAL' => 'r 113',
    'DSLASHEQUAL' => 'r 113',
    'NEWLINE' => 'r 113',
    'COMMA' => 'r 113',
    'ELSE' => 'r 113',
    'RBC' => 'r 113',
    'COLON' => 'r 113',
    'SBC' => 'r 113',
  ),
  76 => 
  array (
    'xor_expr' => 's 77',
    'and_expr' => 's 78',
    'shift_expr' => 's 81',
    'arith_expr' => 's 84',
    'term' => 's 87',
    'factor' => 's 90',
    'PLUS' => 's 93',
    'MINUS' => 's 95',
    'TILDE' => 's 97',
    'power' => 's 99',
    'atom' => 's 100',
    'SBO' => 's 104',
    'BO' => 's 111',
    'NAME' => 's 114',
    'NUMBER' => 's 115',
    'STRING' => 's 116',
    'TRIPLEDOT' => 's 117',
    'NONE' => 's 118',
    'TRUE' => 's 119',
    'FALSE' => 's 120',
  ),
  77 => 
  array (
    'LESS' => 'r 112',
    'GREAT' => 'r 112',
    'EQUAL' => 'r 112',
    'GREATEQUAL' => 'r 112',
    'LESSEQUAL' => 'r 112',
    'DIFF' => 'r 112',
    'NOTEQUAL' => 'r 112',
    'IN' => 'r 112',
    'NOT' => 'r 112',
    'IS' => 'r 112',
    'AND' => 'r 112',
    'OR' => 'r 112',
    'IF' => 'r 112',
    'ASSIGN' => 'r 112',
    'PLUSEQUAL' => 'r 112',
    'MINUSEQUAL' => 'r 112',
    'STAREQUAL' => 'r 112',
    'SLASHEQUAL' => 'r 112',
    'MODEQUAL' => 'r 112',
    'AMPEQUAL' => 'r 112',
    'PIPEEQUAL' => 'r 112',
    'ACUEQUAL' => 'r 112',
    'LSHIFTEQUAL' => 'r 112',
    'RSHIFTEQUAL' => 'r 112',
    'DSTAREQUAL' => 'r 112',
    'DSLASHEQUAL' => 'r 112',
    'NEWLINE' => 'r 112',
    'COMMA' => 'r 112',
    'ELSE' => 'r 112',
    'RBC' => 'r 112',
    'COLON' => 'r 112',
    'SBC' => 'r 112',
  ),
  78 => 
  array (
    'ACUE' => 's 79',
    'PIPE' => 'r 115',
    'LESS' => 'r 115',
    'GREAT' => 'r 115',
    'EQUAL' => 'r 115',
    'GREATEQUAL' => 'r 115',
    'LESSEQUAL' => 'r 115',
    'DIFF' => 'r 115',
    'NOTEQUAL' => 'r 115',
    'IN' => 'r 115',
    'NOT' => 'r 115',
    'IS' => 'r 115',
    'AND' => 'r 115',
    'OR' => 'r 115',
    'IF' => 'r 115',
    'ASSIGN' => 'r 115',
    'PLUSEQUAL' => 'r 115',
    'MINUSEQUAL' => 'r 115',
    'STAREQUAL' => 'r 115',
    'SLASHEQUAL' => 'r 115',
    'MODEQUAL' => 'r 115',
    'AMPEQUAL' => 'r 115',
    'PIPEEQUAL' => 'r 115',
    'ACUEQUAL' => 'r 115',
    'LSHIFTEQUAL' => 'r 115',
    'RSHIFTEQUAL' => 'r 115',
    'DSTAREQUAL' => 'r 115',
    'DSLASHEQUAL' => 'r 115',
    'NEWLINE' => 'r 115',
    'COMMA' => 'r 115',
    'ELSE' => 'r 115',
    'RBC' => 'r 115',
    'COLON' => 'r 115',
    'SBC' => 'r 115',
  ),
  79 => 
  array (
    'and_expr' => 's 80',
    'shift_expr' => 's 81',
    'arith_expr' => 's 84',
    'term' => 's 87',
    'factor' => 's 90',
    'PLUS' => 's 93',
    'MINUS' => 's 95',
    'TILDE' => 's 97',
    'power' => 's 99',
    'atom' => 's 100',
    'SBO' => 's 104',
    'BO' => 's 111',
    'NAME' => 's 114',
    'NUMBER' => 's 115',
    'STRING' => 's 116',
    'TRIPLEDOT' => 's 117',
    'NONE' => 's 118',
    'TRUE' => 's 119',
    'FALSE' => 's 120',
  ),
  80 => 
  array (
    'PIPE' => 'r 114',
    'LESS' => 'r 114',
    'GREAT' => 'r 114',
    'EQUAL' => 'r 114',
    'GREATEQUAL' => 'r 114',
    'LESSEQUAL' => 'r 114',
    'DIFF' => 'r 114',
    'NOTEQUAL' => 'r 114',
    'IN' => 'r 114',
    'NOT' => 'r 114',
    'IS' => 'r 114',
    'AND' => 'r 114',
    'OR' => 'r 114',
    'IF' => 'r 114',
    'ASSIGN' => 'r 114',
    'PLUSEQUAL' => 'r 114',
    'MINUSEQUAL' => 'r 114',
    'STAREQUAL' => 'r 114',
    'SLASHEQUAL' => 'r 114',
    'MODEQUAL' => 'r 114',
    'AMPEQUAL' => 'r 114',
    'PIPEEQUAL' => 'r 114',
    'ACUEQUAL' => 'r 114',
    'LSHIFTEQUAL' => 'r 114',
    'RSHIFTEQUAL' => 'r 114',
    'DSTAREQUAL' => 'r 114',
    'DSLASHEQUAL' => 'r 114',
    'NEWLINE' => 'r 114',
    'COMMA' => 'r 114',
    'ELSE' => 'r 114',
    'RBC' => 'r 114',
    'COLON' => 'r 114',
    'SBC' => 'r 114',
  ),
  81 => 
  array (
    'AMPE' => 's 82',
    'ACUE' => 'r 117',
    'PIPE' => 'r 117',
    'LESS' => 'r 117',
    'GREAT' => 'r 117',
    'EQUAL' => 'r 117',
    'GREATEQUAL' => 'r 117',
    'LESSEQUAL' => 'r 117',
    'DIFF' => 'r 117',
    'NOTEQUAL' => 'r 117',
    'IN' => 'r 117',
    'NOT' => 'r 117',
    'IS' => 'r 117',
    'AND' => 'r 117',
    'OR' => 'r 117',
    'IF' => 'r 117',
    'ASSIGN' => 'r 117',
    'PLUSEQUAL' => 'r 117',
    'MINUSEQUAL' => 'r 117',
    'STAREQUAL' => 'r 117',
    'SLASHEQUAL' => 'r 117',
    'MODEQUAL' => 'r 117',
    'AMPEQUAL' => 'r 117',
    'PIPEEQUAL' => 'r 117',
    'ACUEQUAL' => 'r 117',
    'LSHIFTEQUAL' => 'r 117',
    'RSHIFTEQUAL' => 'r 117',
    'DSTAREQUAL' => 'r 117',
    'DSLASHEQUAL' => 'r 117',
    'NEWLINE' => 'r 117',
    'COMMA' => 'r 117',
    'ELSE' => 'r 117',
    'RBC' => 'r 117',
    'COLON' => 'r 117',
    'SBC' => 'r 117',
  ),
  82 => 
  array (
    'shift_expr' => 's 83',
    'arith_expr' => 's 84',
    'term' => 's 87',
    'factor' => 's 90',
    'PLUS' => 's 93',
    'MINUS' => 's 95',
    'TILDE' => 's 97',
    'power' => 's 99',
    'atom' => 's 100',
    'SBO' => 's 104',
    'BO' => 's 111',
    'NAME' => 's 114',
    'NUMBER' => 's 115',
    'STRING' => 's 116',
    'TRIPLEDOT' => 's 117',
    'NONE' => 's 118',
    'TRUE' => 's 119',
    'FALSE' => 's 120',
  ),
  83 => 
  array (
    'ACUE' => 'r 116',
    'PIPE' => 'r 116',
    'LESS' => 'r 116',
    'GREAT' => 'r 116',
    'EQUAL' => 'r 116',
    'GREATEQUAL' => 'r 116',
    'LESSEQUAL' => 'r 116',
    'DIFF' => 'r 116',
    'NOTEQUAL' => 'r 116',
    'IN' => 'r 116',
    'NOT' => 'r 116',
    'IS' => 'r 116',
    'AND' => 'r 116',
    'OR' => 'r 116',
    'IF' => 'r 116',
    'ASSIGN' => 'r 116',
    'PLUSEQUAL' => 'r 116',
    'MINUSEQUAL' => 'r 116',
    'STAREQUAL' => 'r 116',
    'SLASHEQUAL' => 'r 116',
    'MODEQUAL' => 'r 116',
    'AMPEQUAL' => 'r 116',
    'PIPEEQUAL' => 'r 116',
    'ACUEQUAL' => 'r 116',
    'LSHIFTEQUAL' => 'r 116',
    'RSHIFTEQUAL' => 'r 116',
    'DSTAREQUAL' => 'r 116',
    'DSLASHEQUAL' => 'r 116',
    'NEWLINE' => 'r 116',
    'COMMA' => 'r 116',
    'ELSE' => 'r 116',
    'RBC' => 'r 116',
    'COLON' => 'r 116',
    'SBC' => 'r 116',
  ),
  84 => 
  array (
    'LSHIFT' => 's 85',
    'RSHIFT' => 's 161',
    'AMPE' => 'r 120',
    'ACUE' => 'r 120',
    'PIPE' => 'r 120',
    'LESS' => 'r 120',
    'GREAT' => 'r 120',
    'EQUAL' => 'r 120',
    'GREATEQUAL' => 'r 120',
    'LESSEQUAL' => 'r 120',
    'DIFF' => 'r 120',
    'NOTEQUAL' => 'r 120',
    'IN' => 'r 120',
    'NOT' => 'r 120',
    'IS' => 'r 120',
    'AND' => 'r 120',
    'OR' => 'r 120',
    'IF' => 'r 120',
    'ASSIGN' => 'r 120',
    'PLUSEQUAL' => 'r 120',
    'MINUSEQUAL' => 'r 120',
    'STAREQUAL' => 'r 120',
    'SLASHEQUAL' => 'r 120',
    'MODEQUAL' => 'r 120',
    'AMPEQUAL' => 'r 120',
    'PIPEEQUAL' => 'r 120',
    'ACUEQUAL' => 'r 120',
    'LSHIFTEQUAL' => 'r 120',
    'RSHIFTEQUAL' => 'r 120',
    'DSTAREQUAL' => 'r 120',
    'DSLASHEQUAL' => 'r 120',
    'NEWLINE' => 'r 120',
    'COMMA' => 'r 120',
    'ELSE' => 'r 120',
    'RBC' => 'r 120',
    'COLON' => 'r 120',
    'SBC' => 'r 120',
  ),
  85 => 
  array (
    'arith_expr' => 's 86',
    'term' => 's 87',
    'factor' => 's 90',
    'PLUS' => 's 93',
    'MINUS' => 's 95',
    'TILDE' => 's 97',
    'power' => 's 99',
    'atom' => 's 100',
    'SBO' => 's 104',
    'BO' => 's 111',
    'NAME' => 's 114',
    'NUMBER' => 's 115',
    'STRING' => 's 116',
    'TRIPLEDOT' => 's 117',
    'NONE' => 's 118',
    'TRUE' => 's 119',
    'FALSE' => 's 120',
  ),
  86 => 
  array (
    'AMPE' => 'r 118',
    'ACUE' => 'r 118',
    'PIPE' => 'r 118',
    'LESS' => 'r 118',
    'GREAT' => 'r 118',
    'EQUAL' => 'r 118',
    'GREATEQUAL' => 'r 118',
    'LESSEQUAL' => 'r 118',
    'DIFF' => 'r 118',
    'NOTEQUAL' => 'r 118',
    'IN' => 'r 118',
    'NOT' => 'r 118',
    'IS' => 'r 118',
    'AND' => 'r 118',
    'OR' => 'r 118',
    'IF' => 'r 118',
    'ASSIGN' => 'r 118',
    'PLUSEQUAL' => 'r 118',
    'MINUSEQUAL' => 'r 118',
    'STAREQUAL' => 'r 118',
    'SLASHEQUAL' => 'r 118',
    'MODEQUAL' => 'r 118',
    'AMPEQUAL' => 'r 118',
    'PIPEEQUAL' => 'r 118',
    'ACUEQUAL' => 'r 118',
    'LSHIFTEQUAL' => 'r 118',
    'RSHIFTEQUAL' => 'r 118',
    'DSTAREQUAL' => 'r 118',
    'DSLASHEQUAL' => 'r 118',
    'NEWLINE' => 'r 118',
    'COMMA' => 'r 118',
    'ELSE' => 'r 118',
    'RBC' => 'r 118',
    'COLON' => 'r 118',
    'SBC' => 'r 118',
  ),
  87 => 
  array (
    'PLUS' => 's 88',
    'MINUS' => 's 159',
    'RSHIFT' => 'r 123',
    'LSHIFT' => 'r 123',
    'AMPE' => 'r 123',
    'ACUE' => 'r 123',
    'PIPE' => 'r 123',
    'LESS' => 'r 123',
    'GREAT' => 'r 123',
    'EQUAL' => 'r 123',
    'GREATEQUAL' => 'r 123',
    'LESSEQUAL' => 'r 123',
    'DIFF' => 'r 123',
    'NOTEQUAL' => 'r 123',
    'IN' => 'r 123',
    'NOT' => 'r 123',
    'IS' => 'r 123',
    'AND' => 'r 123',
    'OR' => 'r 123',
    'IF' => 'r 123',
    'ASSIGN' => 'r 123',
    'PLUSEQUAL' => 'r 123',
    'MINUSEQUAL' => 'r 123',
    'STAREQUAL' => 'r 123',
    'SLASHEQUAL' => 'r 123',
    'MODEQUAL' => 'r 123',
    'AMPEQUAL' => 'r 123',
    'PIPEEQUAL' => 'r 123',
    'ACUEQUAL' => 'r 123',
    'LSHIFTEQUAL' => 'r 123',
    'RSHIFTEQUAL' => 'r 123',
    'DSTAREQUAL' => 'r 123',
    'DSLASHEQUAL' => 'r 123',
    'NEWLINE' => 'r 123',
    'COMMA' => 'r 123',
    'ELSE' => 'r 123',
    'RBC' => 'r 123',
    'COLON' => 'r 123',
    'SBC' => 'r 123',
  ),
  88 => 
  array (
    'term' => 's 89',
    'factor' => 's 90',
    'PLUS' => 's 93',
    'MINUS' => 's 95',
    'TILDE' => 's 97',
    'power' => 's 99',
    'atom' => 's 100',
    'SBO' => 's 104',
    'BO' => 's 111',
    'NAME' => 's 114',
    'NUMBER' => 's 115',
    'STRING' => 's 116',
    'TRIPLEDOT' => 's 117',
    'NONE' => 's 118',
    'TRUE' => 's 119',
    'FALSE' => 's 120',
  ),
  89 => 
  array (
    'RSHIFT' => 'r 121',
    'LSHIFT' => 'r 121',
    'AMPE' => 'r 121',
    'ACUE' => 'r 121',
    'PIPE' => 'r 121',
    'LESS' => 'r 121',
    'GREAT' => 'r 121',
    'EQUAL' => 'r 121',
    'GREATEQUAL' => 'r 121',
    'LESSEQUAL' => 'r 121',
    'DIFF' => 'r 121',
    'NOTEQUAL' => 'r 121',
    'IN' => 'r 121',
    'NOT' => 'r 121',
    'IS' => 'r 121',
    'AND' => 'r 121',
    'OR' => 'r 121',
    'IF' => 'r 121',
    'ASSIGN' => 'r 121',
    'PLUSEQUAL' => 'r 121',
    'MINUSEQUAL' => 'r 121',
    'STAREQUAL' => 'r 121',
    'SLASHEQUAL' => 'r 121',
    'MODEQUAL' => 'r 121',
    'AMPEQUAL' => 'r 121',
    'PIPEEQUAL' => 'r 121',
    'ACUEQUAL' => 'r 121',
    'LSHIFTEQUAL' => 'r 121',
    'RSHIFTEQUAL' => 'r 121',
    'DSTAREQUAL' => 'r 121',
    'DSLASHEQUAL' => 'r 121',
    'NEWLINE' => 'r 121',
    'COMMA' => 'r 121',
    'ELSE' => 'r 121',
    'RBC' => 'r 121',
    'COLON' => 'r 121',
    'SBC' => 'r 121',
  ),
  90 => 
  array (
    'STAR' => 's 91',
    'SLASH' => 's 153',
    'MOD' => 's 155',
    'DSLASH' => 's 157',
    'MINUS' => 'r 128',
    'PLUS' => 'r 128',
    'RSHIFT' => 'r 128',
    'LSHIFT' => 'r 128',
    'AMPE' => 'r 128',
    'ACUE' => 'r 128',
    'PIPE' => 'r 128',
    'LESS' => 'r 128',
    'GREAT' => 'r 128',
    'EQUAL' => 'r 128',
    'GREATEQUAL' => 'r 128',
    'LESSEQUAL' => 'r 128',
    'DIFF' => 'r 128',
    'NOTEQUAL' => 'r 128',
    'IN' => 'r 128',
    'NOT' => 'r 128',
    'IS' => 'r 128',
    'AND' => 'r 128',
    'OR' => 'r 128',
    'IF' => 'r 128',
    'ASSIGN' => 'r 128',
    'PLUSEQUAL' => 'r 128',
    'MINUSEQUAL' => 'r 128',
    'STAREQUAL' => 'r 128',
    'SLASHEQUAL' => 'r 128',
    'MODEQUAL' => 'r 128',
    'AMPEQUAL' => 'r 128',
    'PIPEEQUAL' => 'r 128',
    'ACUEQUAL' => 'r 128',
    'LSHIFTEQUAL' => 'r 128',
    'RSHIFTEQUAL' => 'r 128',
    'DSTAREQUAL' => 'r 128',
    'DSLASHEQUAL' => 'r 128',
    'NEWLINE' => 'r 128',
    'COMMA' => 'r 128',
    'ELSE' => 'r 128',
    'RBC' => 'r 128',
    'COLON' => 'r 128',
    'SBC' => 'r 128',
  ),
  91 => 
  array (
    'factor' => 's 92',
    'PLUS' => 's 93',
    'MINUS' => 's 95',
    'TILDE' => 's 97',
    'power' => 's 99',
    'atom' => 's 100',
    'SBO' => 's 104',
    'BO' => 's 111',
    'NAME' => 's 114',
    'NUMBER' => 's 115',
    'STRING' => 's 116',
    'TRIPLEDOT' => 's 117',
    'NONE' => 's 118',
    'TRUE' => 's 119',
    'FALSE' => 's 120',
  ),
  92 => 
  array (
    'MINUS' => 'r 124',
    'PLUS' => 'r 124',
    'RSHIFT' => 'r 124',
    'LSHIFT' => 'r 124',
    'AMPE' => 'r 124',
    'ACUE' => 'r 124',
    'PIPE' => 'r 124',
    'LESS' => 'r 124',
    'GREAT' => 'r 124',
    'EQUAL' => 'r 124',
    'GREATEQUAL' => 'r 124',
    'LESSEQUAL' => 'r 124',
    'DIFF' => 'r 124',
    'NOTEQUAL' => 'r 124',
    'IN' => 'r 124',
    'NOT' => 'r 124',
    'IS' => 'r 124',
    'AND' => 'r 124',
    'OR' => 'r 124',
    'IF' => 'r 124',
    'ASSIGN' => 'r 124',
    'PLUSEQUAL' => 'r 124',
    'MINUSEQUAL' => 'r 124',
    'STAREQUAL' => 'r 124',
    'SLASHEQUAL' => 'r 124',
    'MODEQUAL' => 'r 124',
    'AMPEQUAL' => 'r 124',
    'PIPEEQUAL' => 'r 124',
    'ACUEQUAL' => 'r 124',
    'LSHIFTEQUAL' => 'r 124',
    'RSHIFTEQUAL' => 'r 124',
    'DSTAREQUAL' => 'r 124',
    'DSLASHEQUAL' => 'r 124',
    'NEWLINE' => 'r 124',
    'COMMA' => 'r 124',
    'ELSE' => 'r 124',
    'RBC' => 'r 124',
    'COLON' => 'r 124',
    'SBC' => 'r 124',
  ),
  93 => 
  array (
    'PLUS' => 's 93',
    'factor' => 's 94',
    'MINUS' => 's 95',
    'TILDE' => 's 97',
    'power' => 's 99',
    'atom' => 's 100',
    'SBO' => 's 104',
    'BO' => 's 111',
    'NAME' => 's 114',
    'NUMBER' => 's 115',
    'STRING' => 's 116',
    'TRIPLEDOT' => 's 117',
    'NONE' => 's 118',
    'TRUE' => 's 119',
    'FALSE' => 's 120',
  ),
  94 => 
  array (
    'DSLASH' => 'r 129',
    'MOD' => 'r 129',
    'SLASH' => 'r 129',
    'STAR' => 'r 129',
    'MINUS' => 'r 129',
    'PLUS' => 'r 129',
    'RSHIFT' => 'r 129',
    'LSHIFT' => 'r 129',
    'AMPE' => 'r 129',
    'ACUE' => 'r 129',
    'PIPE' => 'r 129',
    'LESS' => 'r 129',
    'GREAT' => 'r 129',
    'EQUAL' => 'r 129',
    'GREATEQUAL' => 'r 129',
    'LESSEQUAL' => 'r 129',
    'DIFF' => 'r 129',
    'NOTEQUAL' => 'r 129',
    'IN' => 'r 129',
    'NOT' => 'r 129',
    'IS' => 'r 129',
    'AND' => 'r 129',
    'OR' => 'r 129',
    'IF' => 'r 129',
    'ASSIGN' => 'r 129',
    'PLUSEQUAL' => 'r 129',
    'MINUSEQUAL' => 'r 129',
    'STAREQUAL' => 'r 129',
    'SLASHEQUAL' => 'r 129',
    'MODEQUAL' => 'r 129',
    'AMPEQUAL' => 'r 129',
    'PIPEEQUAL' => 'r 129',
    'ACUEQUAL' => 'r 129',
    'LSHIFTEQUAL' => 'r 129',
    'RSHIFTEQUAL' => 'r 129',
    'DSTAREQUAL' => 'r 129',
    'DSLASHEQUAL' => 'r 129',
    'NEWLINE' => 'r 129',
    'COMMA' => 'r 129',
    'ELSE' => 'r 129',
    'RBC' => 'r 129',
    'COLON' => 'r 129',
    'SBC' => 'r 129',
  ),
  95 => 
  array (
    'PLUS' => 's 93',
    'MINUS' => 's 95',
    'factor' => 's 96',
    'TILDE' => 's 97',
    'power' => 's 99',
    'atom' => 's 100',
    'SBO' => 's 104',
    'BO' => 's 111',
    'NAME' => 's 114',
    'NUMBER' => 's 115',
    'STRING' => 's 116',
    'TRIPLEDOT' => 's 117',
    'NONE' => 's 118',
    'TRUE' => 's 119',
    'FALSE' => 's 120',
  ),
  96 => 
  array (
    'DSLASH' => 'r 130',
    'MOD' => 'r 130',
    'SLASH' => 'r 130',
    'STAR' => 'r 130',
    'MINUS' => 'r 130',
    'PLUS' => 'r 130',
    'RSHIFT' => 'r 130',
    'LSHIFT' => 'r 130',
    'AMPE' => 'r 130',
    'ACUE' => 'r 130',
    'PIPE' => 'r 130',
    'LESS' => 'r 130',
    'GREAT' => 'r 130',
    'EQUAL' => 'r 130',
    'GREATEQUAL' => 'r 130',
    'LESSEQUAL' => 'r 130',
    'DIFF' => 'r 130',
    'NOTEQUAL' => 'r 130',
    'IN' => 'r 130',
    'NOT' => 'r 130',
    'IS' => 'r 130',
    'AND' => 'r 130',
    'OR' => 'r 130',
    'IF' => 'r 130',
    'ASSIGN' => 'r 130',
    'PLUSEQUAL' => 'r 130',
    'MINUSEQUAL' => 'r 130',
    'STAREQUAL' => 'r 130',
    'SLASHEQUAL' => 'r 130',
    'MODEQUAL' => 'r 130',
    'AMPEQUAL' => 'r 130',
    'PIPEEQUAL' => 'r 130',
    'ACUEQUAL' => 'r 130',
    'LSHIFTEQUAL' => 'r 130',
    'RSHIFTEQUAL' => 'r 130',
    'DSTAREQUAL' => 'r 130',
    'DSLASHEQUAL' => 'r 130',
    'NEWLINE' => 'r 130',
    'COMMA' => 'r 130',
    'ELSE' => 'r 130',
    'RBC' => 'r 130',
    'COLON' => 'r 130',
    'SBC' => 'r 130',
  ),
  97 => 
  array (
    'PLUS' => 's 93',
    'MINUS' => 's 95',
    'TILDE' => 's 97',
    'factor' => 's 98',
    'power' => 's 99',
    'atom' => 's 100',
    'SBO' => 's 104',
    'BO' => 's 111',
    'NAME' => 's 114',
    'NUMBER' => 's 115',
    'STRING' => 's 116',
    'TRIPLEDOT' => 's 117',
    'NONE' => 's 118',
    'TRUE' => 's 119',
    'FALSE' => 's 120',
  ),
  98 => 
  array (
    'DSLASH' => 'r 131',
    'MOD' => 'r 131',
    'SLASH' => 'r 131',
    'STAR' => 'r 131',
    'MINUS' => 'r 131',
    'PLUS' => 'r 131',
    'RSHIFT' => 'r 131',
    'LSHIFT' => 'r 131',
    'AMPE' => 'r 131',
    'ACUE' => 'r 131',
    'PIPE' => 'r 131',
    'LESS' => 'r 131',
    'GREAT' => 'r 131',
    'EQUAL' => 'r 131',
    'GREATEQUAL' => 'r 131',
    'LESSEQUAL' => 'r 131',
    'DIFF' => 'r 131',
    'NOTEQUAL' => 'r 131',
    'IN' => 'r 131',
    'NOT' => 'r 131',
    'IS' => 'r 131',
    'AND' => 'r 131',
    'OR' => 'r 131',
    'IF' => 'r 131',
    'ASSIGN' => 'r 131',
    'PLUSEQUAL' => 'r 131',
    'MINUSEQUAL' => 'r 131',
    'STAREQUAL' => 'r 131',
    'SLASHEQUAL' => 'r 131',
    'MODEQUAL' => 'r 131',
    'AMPEQUAL' => 'r 131',
    'PIPEEQUAL' => 'r 131',
    'ACUEQUAL' => 'r 131',
    'LSHIFTEQUAL' => 'r 131',
    'RSHIFTEQUAL' => 'r 131',
    'DSTAREQUAL' => 'r 131',
    'DSLASHEQUAL' => 'r 131',
    'NEWLINE' => 'r 131',
    'COMMA' => 'r 131',
    'ELSE' => 'r 131',
    'RBC' => 'r 131',
    'COLON' => 'r 131',
    'SBC' => 'r 131',
  ),
  99 => 
  array (
    'DSLASH' => 'r 132',
    'MOD' => 'r 132',
    'SLASH' => 'r 132',
    'STAR' => 'r 132',
    'MINUS' => 'r 132',
    'PLUS' => 'r 132',
    'RSHIFT' => 'r 132',
    'LSHIFT' => 'r 132',
    'AMPE' => 'r 132',
    'ACUE' => 'r 132',
    'PIPE' => 'r 132',
    'LESS' => 'r 132',
    'GREAT' => 'r 132',
    'EQUAL' => 'r 132',
    'GREATEQUAL' => 'r 132',
    'LESSEQUAL' => 'r 132',
    'DIFF' => 'r 132',
    'NOTEQUAL' => 'r 132',
    'IN' => 'r 132',
    'NOT' => 'r 132',
    'IS' => 'r 132',
    'AND' => 'r 132',
    'OR' => 'r 132',
    'IF' => 'r 132',
    'ASSIGN' => 'r 132',
    'PLUSEQUAL' => 'r 132',
    'MINUSEQUAL' => 'r 132',
    'STAREQUAL' => 'r 132',
    'SLASHEQUAL' => 'r 132',
    'MODEQUAL' => 'r 132',
    'AMPEQUAL' => 'r 132',
    'PIPEEQUAL' => 'r 132',
    'ACUEQUAL' => 'r 132',
    'LSHIFTEQUAL' => 'r 132',
    'RSHIFTEQUAL' => 'r 132',
    'DSTAREQUAL' => 'r 132',
    'DSLASHEQUAL' => 'r 132',
    'NEWLINE' => 'r 132',
    'COMMA' => 'r 132',
    'ELSE' => 'r 132',
    'RBC' => 'r 132',
    'COLON' => 'r 132',
    'SBC' => 'r 132',
  ),
  100 => 
  array (
    'trailers' => 's 101',
    'trailer' => 's 152',
    'RBO' => 's 124',
    'SBO' => 's 147',
    'DOT' => 's 150',
    'DSTAR' => 'r 137',
    'DSLASH' => 'r 137',
    'MOD' => 'r 137',
    'SLASH' => 'r 137',
    'STAR' => 'r 137',
    'MINUS' => 'r 137',
    'PLUS' => 'r 137',
    'RSHIFT' => 'r 137',
    'LSHIFT' => 'r 137',
    'AMPE' => 'r 137',
    'ACUE' => 'r 137',
    'PIPE' => 'r 137',
    'LESS' => 'r 137',
    'GREAT' => 'r 137',
    'EQUAL' => 'r 137',
    'GREATEQUAL' => 'r 137',
    'LESSEQUAL' => 'r 137',
    'DIFF' => 'r 137',
    'NOTEQUAL' => 'r 137',
    'IN' => 'r 137',
    'NOT' => 'r 137',
    'IS' => 'r 137',
    'AND' => 'r 137',
    'OR' => 'r 137',
    'IF' => 'r 137',
    'ASSIGN' => 'r 137',
    'PLUSEQUAL' => 'r 137',
    'MINUSEQUAL' => 'r 137',
    'STAREQUAL' => 'r 137',
    'SLASHEQUAL' => 'r 137',
    'MODEQUAL' => 'r 137',
    'AMPEQUAL' => 'r 137',
    'PIPEEQUAL' => 'r 137',
    'ACUEQUAL' => 'r 137',
    'LSHIFTEQUAL' => 'r 137',
    'RSHIFTEQUAL' => 'r 137',
    'DSTAREQUAL' => 'r 137',
    'DSLASHEQUAL' => 'r 137',
    'NEWLINE' => 'r 137',
    'COMMA' => 'r 137',
    'ELSE' => 'r 137',
    'RBC' => 'r 137',
    'COLON' => 'r 137',
    'SBC' => 'r 137',
  ),
  101 => 
  array (
    'DSTAR' => 's 102',
    'trailer' => 's 123',
    'RBO' => 's 124',
    'SBO' => 's 147',
    'DOT' => 's 150',
    'DSLASH' => 'r 134',
    'MOD' => 'r 134',
    'SLASH' => 'r 134',
    'STAR' => 'r 134',
    'MINUS' => 'r 134',
    'PLUS' => 'r 134',
    'RSHIFT' => 'r 134',
    'LSHIFT' => 'r 134',
    'AMPE' => 'r 134',
    'ACUE' => 'r 134',
    'PIPE' => 'r 134',
    'LESS' => 'r 134',
    'GREAT' => 'r 134',
    'EQUAL' => 'r 134',
    'GREATEQUAL' => 'r 134',
    'LESSEQUAL' => 'r 134',
    'DIFF' => 'r 134',
    'NOTEQUAL' => 'r 134',
    'IN' => 'r 134',
    'NOT' => 'r 134',
    'IS' => 'r 134',
    'AND' => 'r 134',
    'OR' => 'r 134',
    'IF' => 'r 134',
    'ASSIGN' => 'r 134',
    'PLUSEQUAL' => 'r 134',
    'MINUSEQUAL' => 'r 134',
    'STAREQUAL' => 'r 134',
    'SLASHEQUAL' => 'r 134',
    'MODEQUAL' => 'r 134',
    'AMPEQUAL' => 'r 134',
    'PIPEEQUAL' => 'r 134',
    'ACUEQUAL' => 'r 134',
    'LSHIFTEQUAL' => 'r 134',
    'RSHIFTEQUAL' => 'r 134',
    'DSTAREQUAL' => 'r 134',
    'DSLASHEQUAL' => 'r 134',
    'NEWLINE' => 'r 134',
    'COMMA' => 'r 134',
    'ELSE' => 'r 134',
    'RBC' => 'r 134',
    'COLON' => 'r 134',
    'SBC' => 'r 134',
  ),
  102 => 
  array (
    'PLUS' => 's 93',
    'MINUS' => 's 95',
    'TILDE' => 's 97',
    'power' => 's 99',
    'atom' => 's 100',
    'factor' => 's 103',
    'SBO' => 's 104',
    'BO' => 's 111',
    'NAME' => 's 114',
    'NUMBER' => 's 115',
    'STRING' => 's 116',
    'TRIPLEDOT' => 's 117',
    'NONE' => 's 118',
    'TRUE' => 's 119',
    'FALSE' => 's 120',
  ),
  103 => 
  array (
    'DSLASH' => 'r 133',
    'MOD' => 'r 133',
    'SLASH' => 'r 133',
    'STAR' => 'r 133',
    'MINUS' => 'r 133',
    'PLUS' => 'r 133',
    'RSHIFT' => 'r 133',
    'LSHIFT' => 'r 133',
    'AMPE' => 'r 133',
    'ACUE' => 'r 133',
    'PIPE' => 'r 133',
    'LESS' => 'r 133',
    'GREAT' => 'r 133',
    'EQUAL' => 'r 133',
    'GREATEQUAL' => 'r 133',
    'LESSEQUAL' => 'r 133',
    'DIFF' => 'r 133',
    'NOTEQUAL' => 'r 133',
    'IN' => 'r 133',
    'NOT' => 'r 133',
    'IS' => 'r 133',
    'AND' => 'r 133',
    'OR' => 'r 133',
    'IF' => 'r 133',
    'ASSIGN' => 'r 133',
    'PLUSEQUAL' => 'r 133',
    'MINUSEQUAL' => 'r 133',
    'STAREQUAL' => 'r 133',
    'SLASHEQUAL' => 'r 133',
    'MODEQUAL' => 'r 133',
    'AMPEQUAL' => 'r 133',
    'PIPEEQUAL' => 'r 133',
    'ACUEQUAL' => 'r 133',
    'LSHIFTEQUAL' => 'r 133',
    'RSHIFTEQUAL' => 'r 133',
    'DSTAREQUAL' => 'r 133',
    'DSLASHEQUAL' => 'r 133',
    'NEWLINE' => 'r 133',
    'COMMA' => 'r 133',
    'ELSE' => 'r 133',
    'RBC' => 'r 133',
    'COLON' => 'r 133',
    'SBC' => 'r 133',
  ),
  104 => 
  array (
    'or_test' => 's 57',
    'lambdef' => 's 62',
    'and_test' => 's 63',
    'not_test' => 's 66',
    'NOT' => 's 69',
    'comparison' => 's 71',
    'expr' => 's 72',
    'xor_expr' => 's 75',
    'and_expr' => 's 78',
    'shift_expr' => 's 81',
    'arith_expr' => 's 84',
    'term' => 's 87',
    'factor' => 's 90',
    'PLUS' => 's 93',
    'MINUS' => 's 95',
    'TILDE' => 's 97',
    'power' => 's 99',
    'atom' => 's 100',
    'testlist_comp_for' => 's 105',
    'test' => 's 106',
    'SBO' => 's 104',
    'testlist_comp' => 's 121',
    'BO' => 's 111',
    'NAME' => 's 114',
    'NUMBER' => 's 115',
    'STRING' => 's 116',
    'TRIPLEDOT' => 's 117',
    'NONE' => 's 118',
    'TRUE' => 's 119',
    'FALSE' => 's 120',
    'SBC' => 'r 158',
  ),
  105 => 
  array (
    'SBC' => 'r 155',
  ),
  106 => 
  array (
    'test_tail' => 's 107',
    'COMMA' => 's 108',
    'SBC' => 'r 157',
  ),
  107 => 
  array (
    'SBC' => 'r 156',
  ),
  108 => 
  array (
    'or_test' => 's 57',
    'lambdef' => 's 62',
    'and_test' => 's 63',
    'not_test' => 's 66',
    'NOT' => 's 69',
    'comparison' => 's 71',
    'expr' => 's 72',
    'xor_expr' => 's 75',
    'and_expr' => 's 78',
    'shift_expr' => 's 81',
    'arith_expr' => 's 84',
    'term' => 's 87',
    'factor' => 's 90',
    'PLUS' => 's 93',
    'MINUS' => 's 95',
    'TILDE' => 's 97',
    'power' => 's 99',
    'atom' => 's 100',
    'test' => 's 109',
    'SBO' => 's 104',
    'BO' => 's 111',
    'NAME' => 's 114',
    'NUMBER' => 's 115',
    'STRING' => 's 116',
    'TRIPLEDOT' => 's 117',
    'NONE' => 's 118',
    'TRUE' => 's 119',
    'FALSE' => 's 120',
  ),
  109 => 
  array (
    'COMMA' => 's 108',
    'test_tail' => 's 110',
    'SBC' => 'r 160',
  ),
  110 => 
  array (
    'SBC' => 'r 159',
  ),
  111 => 
  array (
    'dictorsetmaker' => 's 112',
  ),
  112 => 
  array (
    'BC' => 's 113',
  ),
  113 => 
  array (
    'RBO' => 'r 163',
    'SBO' => 'r 163',
    'DOT' => 'r 163',
    'DSTAR' => 'r 163',
    'DSLASH' => 'r 163',
    'MOD' => 'r 163',
    'SLASH' => 'r 163',
    'STAR' => 'r 163',
    'MINUS' => 'r 163',
    'PLUS' => 'r 163',
    'RSHIFT' => 'r 163',
    'LSHIFT' => 'r 163',
    'AMPE' => 'r 163',
    'ACUE' => 'r 163',
    'PIPE' => 'r 163',
    'LESS' => 'r 163',
    'GREAT' => 'r 163',
    'EQUAL' => 'r 163',
    'GREATEQUAL' => 'r 163',
    'LESSEQUAL' => 'r 163',
    'DIFF' => 'r 163',
    'NOTEQUAL' => 'r 163',
    'IN' => 'r 163',
    'NOT' => 'r 163',
    'IS' => 'r 163',
    'AND' => 'r 163',
    'OR' => 'r 163',
    'IF' => 'r 163',
    'ASSIGN' => 'r 163',
    'PLUSEQUAL' => 'r 163',
    'MINUSEQUAL' => 'r 163',
    'STAREQUAL' => 'r 163',
    'SLASHEQUAL' => 'r 163',
    'MODEQUAL' => 'r 163',
    'AMPEQUAL' => 'r 163',
    'PIPEEQUAL' => 'r 163',
    'ACUEQUAL' => 'r 163',
    'LSHIFTEQUAL' => 'r 163',
    'RSHIFTEQUAL' => 'r 163',
    'DSTAREQUAL' => 'r 163',
    'DSLASHEQUAL' => 'r 163',
    'NEWLINE' => 'r 163',
    'COMMA' => 'r 163',
    'ELSE' => 'r 163',
    'RBC' => 'r 163',
    'COLON' => 'r 163',
    'SBC' => 'r 163',
  ),
  114 => 
  array (
    'RBO' => 'r 164',
    'SBO' => 'r 164',
    'DOT' => 'r 164',
    'DSTAR' => 'r 164',
    'DSLASH' => 'r 164',
    'MOD' => 'r 164',
    'SLASH' => 'r 164',
    'STAR' => 'r 164',
    'MINUS' => 'r 164',
    'PLUS' => 'r 164',
    'RSHIFT' => 'r 164',
    'LSHIFT' => 'r 164',
    'AMPE' => 'r 164',
    'ACUE' => 'r 164',
    'PIPE' => 'r 164',
    'LESS' => 'r 164',
    'GREAT' => 'r 164',
    'EQUAL' => 'r 164',
    'GREATEQUAL' => 'r 164',
    'LESSEQUAL' => 'r 164',
    'DIFF' => 'r 164',
    'NOTEQUAL' => 'r 164',
    'IN' => 'r 164',
    'NOT' => 'r 164',
    'IS' => 'r 164',
    'AND' => 'r 164',
    'OR' => 'r 164',
    'IF' => 'r 164',
    'ASSIGN' => 'r 164',
    'PLUSEQUAL' => 'r 164',
    'MINUSEQUAL' => 'r 164',
    'STAREQUAL' => 'r 164',
    'SLASHEQUAL' => 'r 164',
    'MODEQUAL' => 'r 164',
    'AMPEQUAL' => 'r 164',
    'PIPEEQUAL' => 'r 164',
    'ACUEQUAL' => 'r 164',
    'LSHIFTEQUAL' => 'r 164',
    'RSHIFTEQUAL' => 'r 164',
    'DSTAREQUAL' => 'r 164',
    'DSLASHEQUAL' => 'r 164',
    'NEWLINE' => 'r 164',
    'COMMA' => 'r 164',
    'ELSE' => 'r 164',
    'RBC' => 'r 164',
    'COLON' => 'r 164',
    'SBC' => 'r 164',
  ),
  115 => 
  array (
    'RBO' => 'r 165',
    'SBO' => 'r 165',
    'DOT' => 'r 165',
    'DSTAR' => 'r 165',
    'DSLASH' => 'r 165',
    'MOD' => 'r 165',
    'SLASH' => 'r 165',
    'STAR' => 'r 165',
    'MINUS' => 'r 165',
    'PLUS' => 'r 165',
    'RSHIFT' => 'r 165',
    'LSHIFT' => 'r 165',
    'AMPE' => 'r 165',
    'ACUE' => 'r 165',
    'PIPE' => 'r 165',
    'LESS' => 'r 165',
    'GREAT' => 'r 165',
    'EQUAL' => 'r 165',
    'GREATEQUAL' => 'r 165',
    'LESSEQUAL' => 'r 165',
    'DIFF' => 'r 165',
    'NOTEQUAL' => 'r 165',
    'IN' => 'r 165',
    'NOT' => 'r 165',
    'IS' => 'r 165',
    'AND' => 'r 165',
    'OR' => 'r 165',
    'IF' => 'r 165',
    'ASSIGN' => 'r 165',
    'PLUSEQUAL' => 'r 165',
    'MINUSEQUAL' => 'r 165',
    'STAREQUAL' => 'r 165',
    'SLASHEQUAL' => 'r 165',
    'MODEQUAL' => 'r 165',
    'AMPEQUAL' => 'r 165',
    'PIPEEQUAL' => 'r 165',
    'ACUEQUAL' => 'r 165',
    'LSHIFTEQUAL' => 'r 165',
    'RSHIFTEQUAL' => 'r 165',
    'DSTAREQUAL' => 'r 165',
    'DSLASHEQUAL' => 'r 165',
    'NEWLINE' => 'r 165',
    'COMMA' => 'r 165',
    'ELSE' => 'r 165',
    'RBC' => 'r 165',
    'COLON' => 'r 165',
    'SBC' => 'r 165',
  ),
  116 => 
  array (
    'RBO' => 'r 166',
    'SBO' => 'r 166',
    'DOT' => 'r 166',
    'DSTAR' => 'r 166',
    'DSLASH' => 'r 166',
    'MOD' => 'r 166',
    'SLASH' => 'r 166',
    'STAR' => 'r 166',
    'MINUS' => 'r 166',
    'PLUS' => 'r 166',
    'RSHIFT' => 'r 166',
    'LSHIFT' => 'r 166',
    'AMPE' => 'r 166',
    'ACUE' => 'r 166',
    'PIPE' => 'r 166',
    'LESS' => 'r 166',
    'GREAT' => 'r 166',
    'EQUAL' => 'r 166',
    'GREATEQUAL' => 'r 166',
    'LESSEQUAL' => 'r 166',
    'DIFF' => 'r 166',
    'NOTEQUAL' => 'r 166',
    'IN' => 'r 166',
    'NOT' => 'r 166',
    'IS' => 'r 166',
    'AND' => 'r 166',
    'OR' => 'r 166',
    'IF' => 'r 166',
    'ASSIGN' => 'r 166',
    'PLUSEQUAL' => 'r 166',
    'MINUSEQUAL' => 'r 166',
    'STAREQUAL' => 'r 166',
    'SLASHEQUAL' => 'r 166',
    'MODEQUAL' => 'r 166',
    'AMPEQUAL' => 'r 166',
    'PIPEEQUAL' => 'r 166',
    'ACUEQUAL' => 'r 166',
    'LSHIFTEQUAL' => 'r 166',
    'RSHIFTEQUAL' => 'r 166',
    'DSTAREQUAL' => 'r 166',
    'DSLASHEQUAL' => 'r 166',
    'NEWLINE' => 'r 166',
    'COMMA' => 'r 166',
    'ELSE' => 'r 166',
    'RBC' => 'r 166',
    'COLON' => 'r 166',
    'SBC' => 'r 166',
  ),
  117 => 
  array (
    'RBO' => 'r 167',
    'SBO' => 'r 167',
    'DOT' => 'r 167',
    'DSTAR' => 'r 167',
    'DSLASH' => 'r 167',
    'MOD' => 'r 167',
    'SLASH' => 'r 167',
    'STAR' => 'r 167',
    'MINUS' => 'r 167',
    'PLUS' => 'r 167',
    'RSHIFT' => 'r 167',
    'LSHIFT' => 'r 167',
    'AMPE' => 'r 167',
    'ACUE' => 'r 167',
    'PIPE' => 'r 167',
    'LESS' => 'r 167',
    'GREAT' => 'r 167',
    'EQUAL' => 'r 167',
    'GREATEQUAL' => 'r 167',
    'LESSEQUAL' => 'r 167',
    'DIFF' => 'r 167',
    'NOTEQUAL' => 'r 167',
    'IN' => 'r 167',
    'NOT' => 'r 167',
    'IS' => 'r 167',
    'AND' => 'r 167',
    'OR' => 'r 167',
    'IF' => 'r 167',
    'ASSIGN' => 'r 167',
    'PLUSEQUAL' => 'r 167',
    'MINUSEQUAL' => 'r 167',
    'STAREQUAL' => 'r 167',
    'SLASHEQUAL' => 'r 167',
    'MODEQUAL' => 'r 167',
    'AMPEQUAL' => 'r 167',
    'PIPEEQUAL' => 'r 167',
    'ACUEQUAL' => 'r 167',
    'LSHIFTEQUAL' => 'r 167',
    'RSHIFTEQUAL' => 'r 167',
    'DSTAREQUAL' => 'r 167',
    'DSLASHEQUAL' => 'r 167',
    'NEWLINE' => 'r 167',
    'COMMA' => 'r 167',
    'ELSE' => 'r 167',
    'RBC' => 'r 167',
    'COLON' => 'r 167',
    'SBC' => 'r 167',
  ),
  118 => 
  array (
    'RBO' => 'r 168',
    'SBO' => 'r 168',
    'DOT' => 'r 168',
    'DSTAR' => 'r 168',
    'DSLASH' => 'r 168',
    'MOD' => 'r 168',
    'SLASH' => 'r 168',
    'STAR' => 'r 168',
    'MINUS' => 'r 168',
    'PLUS' => 'r 168',
    'RSHIFT' => 'r 168',
    'LSHIFT' => 'r 168',
    'AMPE' => 'r 168',
    'ACUE' => 'r 168',
    'PIPE' => 'r 168',
    'LESS' => 'r 168',
    'GREAT' => 'r 168',
    'EQUAL' => 'r 168',
    'GREATEQUAL' => 'r 168',
    'LESSEQUAL' => 'r 168',
    'DIFF' => 'r 168',
    'NOTEQUAL' => 'r 168',
    'IN' => 'r 168',
    'NOT' => 'r 168',
    'IS' => 'r 168',
    'AND' => 'r 168',
    'OR' => 'r 168',
    'IF' => 'r 168',
    'ASSIGN' => 'r 168',
    'PLUSEQUAL' => 'r 168',
    'MINUSEQUAL' => 'r 168',
    'STAREQUAL' => 'r 168',
    'SLASHEQUAL' => 'r 168',
    'MODEQUAL' => 'r 168',
    'AMPEQUAL' => 'r 168',
    'PIPEEQUAL' => 'r 168',
    'ACUEQUAL' => 'r 168',
    'LSHIFTEQUAL' => 'r 168',
    'RSHIFTEQUAL' => 'r 168',
    'DSTAREQUAL' => 'r 168',
    'DSLASHEQUAL' => 'r 168',
    'NEWLINE' => 'r 168',
    'COMMA' => 'r 168',
    'ELSE' => 'r 168',
    'RBC' => 'r 168',
    'COLON' => 'r 168',
    'SBC' => 'r 168',
  ),
  119 => 
  array (
    'RBO' => 'r 169',
    'SBO' => 'r 169',
    'DOT' => 'r 169',
    'DSTAR' => 'r 169',
    'DSLASH' => 'r 169',
    'MOD' => 'r 169',
    'SLASH' => 'r 169',
    'STAR' => 'r 169',
    'MINUS' => 'r 169',
    'PLUS' => 'r 169',
    'RSHIFT' => 'r 169',
    'LSHIFT' => 'r 169',
    'AMPE' => 'r 169',
    'ACUE' => 'r 169',
    'PIPE' => 'r 169',
    'LESS' => 'r 169',
    'GREAT' => 'r 169',
    'EQUAL' => 'r 169',
    'GREATEQUAL' => 'r 169',
    'LESSEQUAL' => 'r 169',
    'DIFF' => 'r 169',
    'NOTEQUAL' => 'r 169',
    'IN' => 'r 169',
    'NOT' => 'r 169',
    'IS' => 'r 169',
    'AND' => 'r 169',
    'OR' => 'r 169',
    'IF' => 'r 169',
    'ASSIGN' => 'r 169',
    'PLUSEQUAL' => 'r 169',
    'MINUSEQUAL' => 'r 169',
    'STAREQUAL' => 'r 169',
    'SLASHEQUAL' => 'r 169',
    'MODEQUAL' => 'r 169',
    'AMPEQUAL' => 'r 169',
    'PIPEEQUAL' => 'r 169',
    'ACUEQUAL' => 'r 169',
    'LSHIFTEQUAL' => 'r 169',
    'RSHIFTEQUAL' => 'r 169',
    'DSTAREQUAL' => 'r 169',
    'DSLASHEQUAL' => 'r 169',
    'NEWLINE' => 'r 169',
    'COMMA' => 'r 169',
    'ELSE' => 'r 169',
    'RBC' => 'r 169',
    'COLON' => 'r 169',
    'SBC' => 'r 169',
  ),
  120 => 
  array (
    'RBO' => 'r 170',
    'SBO' => 'r 170',
    'DOT' => 'r 170',
    'DSTAR' => 'r 170',
    'DSLASH' => 'r 170',
    'MOD' => 'r 170',
    'SLASH' => 'r 170',
    'STAR' => 'r 170',
    'MINUS' => 'r 170',
    'PLUS' => 'r 170',
    'RSHIFT' => 'r 170',
    'LSHIFT' => 'r 170',
    'AMPE' => 'r 170',
    'ACUE' => 'r 170',
    'PIPE' => 'r 170',
    'LESS' => 'r 170',
    'GREAT' => 'r 170',
    'EQUAL' => 'r 170',
    'GREATEQUAL' => 'r 170',
    'LESSEQUAL' => 'r 170',
    'DIFF' => 'r 170',
    'NOTEQUAL' => 'r 170',
    'IN' => 'r 170',
    'NOT' => 'r 170',
    'IS' => 'r 170',
    'AND' => 'r 170',
    'OR' => 'r 170',
    'IF' => 'r 170',
    'ASSIGN' => 'r 170',
    'PLUSEQUAL' => 'r 170',
    'MINUSEQUAL' => 'r 170',
    'STAREQUAL' => 'r 170',
    'SLASHEQUAL' => 'r 170',
    'MODEQUAL' => 'r 170',
    'AMPEQUAL' => 'r 170',
    'PIPEEQUAL' => 'r 170',
    'ACUEQUAL' => 'r 170',
    'LSHIFTEQUAL' => 'r 170',
    'RSHIFTEQUAL' => 'r 170',
    'DSTAREQUAL' => 'r 170',
    'DSLASHEQUAL' => 'r 170',
    'NEWLINE' => 'r 170',
    'COMMA' => 'r 170',
    'ELSE' => 'r 170',
    'RBC' => 'r 170',
    'COLON' => 'r 170',
    'SBC' => 'r 170',
  ),
  121 => 
  array (
    'SBC' => 's 122',
  ),
  122 => 
  array (
    'RBO' => 'r 162',
    'SBO' => 'r 162',
    'DOT' => 'r 162',
    'DSTAR' => 'r 162',
    'DSLASH' => 'r 162',
    'MOD' => 'r 162',
    'SLASH' => 'r 162',
    'STAR' => 'r 162',
    'MINUS' => 'r 162',
    'PLUS' => 'r 162',
    'RSHIFT' => 'r 162',
    'LSHIFT' => 'r 162',
    'AMPE' => 'r 162',
    'ACUE' => 'r 162',
    'PIPE' => 'r 162',
    'LESS' => 'r 162',
    'GREAT' => 'r 162',
    'EQUAL' => 'r 162',
    'GREATEQUAL' => 'r 162',
    'LESSEQUAL' => 'r 162',
    'DIFF' => 'r 162',
    'NOTEQUAL' => 'r 162',
    'IN' => 'r 162',
    'NOT' => 'r 162',
    'IS' => 'r 162',
    'AND' => 'r 162',
    'OR' => 'r 162',
    'IF' => 'r 162',
    'ASSIGN' => 'r 162',
    'PLUSEQUAL' => 'r 162',
    'MINUSEQUAL' => 'r 162',
    'STAREQUAL' => 'r 162',
    'SLASHEQUAL' => 'r 162',
    'MODEQUAL' => 'r 162',
    'AMPEQUAL' => 'r 162',
    'PIPEEQUAL' => 'r 162',
    'ACUEQUAL' => 'r 162',
    'LSHIFTEQUAL' => 'r 162',
    'RSHIFTEQUAL' => 'r 162',
    'DSTAREQUAL' => 'r 162',
    'DSLASHEQUAL' => 'r 162',
    'NEWLINE' => 'r 162',
    'COMMA' => 'r 162',
    'ELSE' => 'r 162',
    'RBC' => 'r 162',
    'COLON' => 'r 162',
    'SBC' => 'r 162',
  ),
  123 => 
  array (
    'RBO' => 'r 135',
    'SBO' => 'r 135',
    'DOT' => 'r 135',
    'DSTAR' => 'r 135',
    'DSLASH' => 'r 135',
    'MOD' => 'r 135',
    'SLASH' => 'r 135',
    'STAR' => 'r 135',
    'MINUS' => 'r 135',
    'PLUS' => 'r 135',
    'RSHIFT' => 'r 135',
    'LSHIFT' => 'r 135',
    'AMPE' => 'r 135',
    'ACUE' => 'r 135',
    'PIPE' => 'r 135',
    'LESS' => 'r 135',
    'GREAT' => 'r 135',
    'EQUAL' => 'r 135',
    'GREATEQUAL' => 'r 135',
    'LESSEQUAL' => 'r 135',
    'DIFF' => 'r 135',
    'NOTEQUAL' => 'r 135',
    'IN' => 'r 135',
    'NOT' => 'r 135',
    'IS' => 'r 135',
    'AND' => 'r 135',
    'OR' => 'r 135',
    'IF' => 'r 135',
    'ASSIGN' => 'r 135',
    'PLUSEQUAL' => 'r 135',
    'MINUSEQUAL' => 'r 135',
    'STAREQUAL' => 'r 135',
    'SLASHEQUAL' => 'r 135',
    'MODEQUAL' => 'r 135',
    'AMPEQUAL' => 'r 135',
    'PIPEEQUAL' => 'r 135',
    'ACUEQUAL' => 'r 135',
    'LSHIFTEQUAL' => 'r 135',
    'RSHIFTEQUAL' => 'r 135',
    'DSTAREQUAL' => 'r 135',
    'DSLASHEQUAL' => 'r 135',
    'NEWLINE' => 'r 135',
    'COMMA' => 'r 135',
    'ELSE' => 'r 135',
    'RBC' => 'r 135',
    'COLON' => 'r 135',
    'SBC' => 'r 135',
  ),
  124 => 
  array (
    'or_test' => 's 57',
    'lambdef' => 's 62',
    'and_test' => 's 63',
    'not_test' => 's 66',
    'NOT' => 's 69',
    'comparison' => 's 71',
    'expr' => 's 72',
    'xor_expr' => 's 75',
    'and_expr' => 's 78',
    'shift_expr' => 's 81',
    'arith_expr' => 's 84',
    'term' => 's 87',
    'factor' => 's 90',
    'PLUS' => 's 93',
    'MINUS' => 's 95',
    'TILDE' => 's 97',
    'power' => 's 99',
    'atom' => 's 100',
    'RBC' => 's 125',
    'arglist' => 's 126',
    'arglists_rc' => 's 128',
    'argument' => 's 145',
    'test' => 's 138',
    'SBO' => 's 104',
    'BO' => 's 111',
    'NAME' => 's 114',
    'NUMBER' => 's 115',
    'STRING' => 's 116',
    'TRIPLEDOT' => 's 117',
    'NONE' => 's 118',
    'TRUE' => 's 119',
    'FALSE' => 's 120',
    'DSTAR' => 'r 149',
    'STAR' => 'r 149',
  ),
  125 => 
  array (
    'RBO' => 'r 138',
    'SBO' => 'r 138',
    'DOT' => 'r 138',
    'DSTAR' => 'r 138',
    'DSLASH' => 'r 138',
    'MOD' => 'r 138',
    'SLASH' => 'r 138',
    'STAR' => 'r 138',
    'MINUS' => 'r 138',
    'PLUS' => 'r 138',
    'RSHIFT' => 'r 138',
    'LSHIFT' => 'r 138',
    'AMPE' => 'r 138',
    'ACUE' => 'r 138',
    'PIPE' => 'r 138',
    'LESS' => 'r 138',
    'GREAT' => 'r 138',
    'EQUAL' => 'r 138',
    'GREATEQUAL' => 'r 138',
    'LESSEQUAL' => 'r 138',
    'DIFF' => 'r 138',
    'NOTEQUAL' => 'r 138',
    'IN' => 'r 138',
    'NOT' => 'r 138',
    'IS' => 'r 138',
    'AND' => 'r 138',
    'OR' => 'r 138',
    'IF' => 'r 138',
    'ASSIGN' => 'r 138',
    'PLUSEQUAL' => 'r 138',
    'MINUSEQUAL' => 'r 138',
    'STAREQUAL' => 'r 138',
    'SLASHEQUAL' => 'r 138',
    'MODEQUAL' => 'r 138',
    'AMPEQUAL' => 'r 138',
    'PIPEEQUAL' => 'r 138',
    'ACUEQUAL' => 'r 138',
    'LSHIFTEQUAL' => 'r 138',
    'RSHIFTEQUAL' => 'r 138',
    'DSTAREQUAL' => 'r 138',
    'DSLASHEQUAL' => 'r 138',
    'NEWLINE' => 'r 138',
    'COMMA' => 'r 138',
    'ELSE' => 'r 138',
    'RBC' => 'r 138',
    'COLON' => 'r 138',
    'SBC' => 'r 138',
  ),
  126 => 
  array (
    'RBC' => 's 127',
  ),
  127 => 
  array (
    'RBO' => 'r 139',
    'SBO' => 'r 139',
    'DOT' => 'r 139',
    'DSTAR' => 'r 139',
    'DSLASH' => 'r 139',
    'MOD' => 'r 139',
    'SLASH' => 'r 139',
    'STAR' => 'r 139',
    'MINUS' => 'r 139',
    'PLUS' => 'r 139',
    'RSHIFT' => 'r 139',
    'LSHIFT' => 'r 139',
    'AMPE' => 'r 139',
    'ACUE' => 'r 139',
    'PIPE' => 'r 139',
    'LESS' => 'r 139',
    'GREAT' => 'r 139',
    'EQUAL' => 'r 139',
    'GREATEQUAL' => 'r 139',
    'LESSEQUAL' => 'r 139',
    'DIFF' => 'r 139',
    'NOTEQUAL' => 'r 139',
    'IN' => 'r 139',
    'NOT' => 'r 139',
    'IS' => 'r 139',
    'AND' => 'r 139',
    'OR' => 'r 139',
    'IF' => 'r 139',
    'ASSIGN' => 'r 139',
    'PLUSEQUAL' => 'r 139',
    'MINUSEQUAL' => 'r 139',
    'STAREQUAL' => 'r 139',
    'SLASHEQUAL' => 'r 139',
    'MODEQUAL' => 'r 139',
    'AMPEQUAL' => 'r 139',
    'PIPEEQUAL' => 'r 139',
    'ACUEQUAL' => 'r 139',
    'LSHIFTEQUAL' => 'r 139',
    'RSHIFTEQUAL' => 'r 139',
    'DSTAREQUAL' => 'r 139',
    'DSLASHEQUAL' => 'r 139',
    'NEWLINE' => 'r 139',
    'COMMA' => 'r 139',
    'ELSE' => 'r 139',
    'RBC' => 'r 139',
    'COLON' => 'r 139',
    'SBC' => 'r 139',
  ),
  128 => 
  array (
    'or_test' => 's 57',
    'lambdef' => 's 62',
    'and_test' => 's 63',
    'not_test' => 's 66',
    'NOT' => 's 69',
    'comparison' => 's 71',
    'expr' => 's 72',
    'xor_expr' => 's 75',
    'and_expr' => 's 78',
    'shift_expr' => 's 81',
    'arith_expr' => 's 84',
    'term' => 's 87',
    'factor' => 's 90',
    'PLUS' => 's 93',
    'MINUS' => 's 95',
    'TILDE' => 's 97',
    'power' => 's 99',
    'atom' => 's 100',
    'argument' => 's 129',
    'STAR' => 's 131',
    'DSTAR' => 's 143',
    'test' => 's 138',
    'SBO' => 's 104',
    'BO' => 's 111',
    'NAME' => 's 114',
    'NUMBER' => 's 115',
    'STRING' => 's 116',
    'TRIPLEDOT' => 's 117',
    'NONE' => 's 118',
    'TRUE' => 's 119',
    'FALSE' => 's 120',
  ),
  129 => 
  array (
    'COMMA' => 's 130',
    'RBC' => 'r 143',
  ),
  130 => 
  array (
    'RBC' => 'r 142',
    'DSTAR' => 'r 147',
    'lambdef' => 'r 147',
    'NOT' => 'r 147',
    'PLUS' => 'r 147',
    'MINUS' => 'r 147',
    'TILDE' => 'r 147',
    'SBO' => 'r 147',
    'BO' => 'r 147',
    'NAME' => 'r 147',
    'NUMBER' => 'r 147',
    'STRING' => 'r 147',
    'TRIPLEDOT' => 'r 147',
    'NONE' => 'r 147',
    'TRUE' => 'r 147',
    'FALSE' => 'r 147',
    'STAR' => 'r 147',
  ),
  131 => 
  array (
    'or_test' => 's 57',
    'lambdef' => 's 62',
    'and_test' => 's 63',
    'not_test' => 's 66',
    'NOT' => 's 69',
    'comparison' => 's 71',
    'expr' => 's 72',
    'xor_expr' => 's 75',
    'and_expr' => 's 78',
    'shift_expr' => 's 81',
    'arith_expr' => 's 84',
    'term' => 's 87',
    'factor' => 's 90',
    'PLUS' => 's 93',
    'MINUS' => 's 95',
    'TILDE' => 's 97',
    'power' => 's 99',
    'atom' => 's 100',
    'test' => 's 132',
    'SBO' => 's 104',
    'BO' => 's 111',
    'NAME' => 's 114',
    'NUMBER' => 's 115',
    'STRING' => 's 116',
    'TRIPLEDOT' => 's 117',
    'NONE' => 's 118',
    'TRUE' => 's 119',
    'FALSE' => 's 120',
  ),
  132 => 
  array (
    'arglists_lc' => 's 133',
    'COMMA' => 's 141',
    'RBC' => 'r 152',
  ),
  133 => 
  array (
    'COMMA' => 's 134',
    'RBC' => 'r 145',
  ),
  134 => 
  array (
    'or_test' => 's 57',
    'lambdef' => 's 62',
    'and_test' => 's 63',
    'not_test' => 's 66',
    'NOT' => 's 69',
    'comparison' => 's 71',
    'expr' => 's 72',
    'xor_expr' => 's 75',
    'and_expr' => 's 78',
    'shift_expr' => 's 81',
    'arith_expr' => 's 84',
    'term' => 's 87',
    'factor' => 's 90',
    'PLUS' => 's 93',
    'MINUS' => 's 95',
    'TILDE' => 's 97',
    'power' => 's 99',
    'atom' => 's 100',
    'DSTAR' => 's 135',
    'argument' => 's 137',
    'test' => 's 138',
    'SBO' => 's 104',
    'BO' => 's 111',
    'NAME' => 's 114',
    'NUMBER' => 's 115',
    'STRING' => 's 116',
    'TRIPLEDOT' => 's 117',
    'NONE' => 's 118',
    'TRUE' => 's 119',
    'FALSE' => 's 120',
  ),
  135 => 
  array (
    'or_test' => 's 57',
    'lambdef' => 's 62',
    'and_test' => 's 63',
    'not_test' => 's 66',
    'NOT' => 's 69',
    'comparison' => 's 71',
    'expr' => 's 72',
    'xor_expr' => 's 75',
    'and_expr' => 's 78',
    'shift_expr' => 's 81',
    'arith_expr' => 's 84',
    'term' => 's 87',
    'factor' => 's 90',
    'PLUS' => 's 93',
    'MINUS' => 's 95',
    'TILDE' => 's 97',
    'power' => 's 99',
    'atom' => 's 100',
    'test' => 's 136',
    'SBO' => 's 104',
    'BO' => 's 111',
    'NAME' => 's 114',
    'NUMBER' => 's 115',
    'STRING' => 's 116',
    'TRIPLEDOT' => 's 117',
    'NONE' => 's 118',
    'TRUE' => 's 119',
    'FALSE' => 's 120',
  ),
  136 => 
  array (
    'RBC' => 'r 144',
  ),
  137 => 
  array (
    'COMMA' => 'r 150',
    'RBC' => 'r 150',
  ),
  138 => 
  array (
    'EQUAL' => 's 139',
    'COMMA' => 'r 153',
    'RBC' => 'r 153',
  ),
  139 => 
  array (
    'or_test' => 's 57',
    'lambdef' => 's 62',
    'and_test' => 's 63',
    'not_test' => 's 66',
    'NOT' => 's 69',
    'comparison' => 's 71',
    'expr' => 's 72',
    'xor_expr' => 's 75',
    'and_expr' => 's 78',
    'shift_expr' => 's 81',
    'arith_expr' => 's 84',
    'term' => 's 87',
    'factor' => 's 90',
    'PLUS' => 's 93',
    'MINUS' => 's 95',
    'TILDE' => 's 97',
    'power' => 's 99',
    'atom' => 's 100',
    'test' => 's 140',
    'SBO' => 's 104',
    'BO' => 's 111',
    'NAME' => 's 114',
    'NUMBER' => 's 115',
    'STRING' => 's 116',
    'TRIPLEDOT' => 's 117',
    'NONE' => 's 118',
    'TRUE' => 's 119',
    'FALSE' => 's 120',
  ),
  140 => 
  array (
    'COMMA' => 'r 154',
    'RBC' => 'r 154',
  ),
  141 => 
  array (
    'or_test' => 's 57',
    'lambdef' => 's 62',
    'and_test' => 's 63',
    'not_test' => 's 66',
    'NOT' => 's 69',
    'comparison' => 's 71',
    'expr' => 's 72',
    'xor_expr' => 's 75',
    'and_expr' => 's 78',
    'shift_expr' => 's 81',
    'arith_expr' => 's 84',
    'term' => 's 87',
    'factor' => 's 90',
    'PLUS' => 's 93',
    'MINUS' => 's 95',
    'TILDE' => 's 97',
    'power' => 's 99',
    'atom' => 's 100',
    'argument' => 's 142',
    'test' => 's 138',
    'SBO' => 's 104',
    'BO' => 's 111',
    'NAME' => 's 114',
    'NUMBER' => 's 115',
    'STRING' => 's 116',
    'TRIPLEDOT' => 's 117',
    'NONE' => 's 118',
    'TRUE' => 's 119',
    'FALSE' => 's 120',
  ),
  142 => 
  array (
    'COMMA' => 'r 151',
    'RBC' => 'r 151',
  ),
  143 => 
  array (
    'or_test' => 's 57',
    'lambdef' => 's 62',
    'and_test' => 's 63',
    'not_test' => 's 66',
    'NOT' => 's 69',
    'comparison' => 's 71',
    'expr' => 's 72',
    'xor_expr' => 's 75',
    'and_expr' => 's 78',
    'shift_expr' => 's 81',
    'arith_expr' => 's 84',
    'term' => 's 87',
    'factor' => 's 90',
    'PLUS' => 's 93',
    'MINUS' => 's 95',
    'TILDE' => 's 97',
    'power' => 's 99',
    'atom' => 's 100',
    'test' => 's 144',
    'SBO' => 's 104',
    'BO' => 's 111',
    'NAME' => 's 114',
    'NUMBER' => 's 115',
    'STRING' => 's 116',
    'TRIPLEDOT' => 's 117',
    'NONE' => 's 118',
    'TRUE' => 's 119',
    'FALSE' => 's 120',
  ),
  144 => 
  array (
    'RBC' => 'r 146',
  ),
  145 => 
  array (
    'COMMA' => 's 146',
  ),
  146 => 
  array (
    'DSTAR' => 'r 148',
    'lambdef' => 'r 148',
    'NOT' => 'r 148',
    'PLUS' => 'r 148',
    'MINUS' => 'r 148',
    'TILDE' => 'r 148',
    'SBO' => 'r 148',
    'BO' => 'r 148',
    'NAME' => 'r 148',
    'NUMBER' => 'r 148',
    'STRING' => 'r 148',
    'TRIPLEDOT' => 'r 148',
    'NONE' => 'r 148',
    'TRUE' => 'r 148',
    'FALSE' => 'r 148',
    'STAR' => 'r 148',
  ),
  147 => 
  array (
    'subscriptlist' => 's 148',
  ),
  148 => 
  array (
    'SBC' => 's 149',
  ),
  149 => 
  array (
    'RBO' => 'r 140',
    'SBO' => 'r 140',
    'DOT' => 'r 140',
    'DSTAR' => 'r 140',
    'DSLASH' => 'r 140',
    'MOD' => 'r 140',
    'SLASH' => 'r 140',
    'STAR' => 'r 140',
    'MINUS' => 'r 140',
    'PLUS' => 'r 140',
    'RSHIFT' => 'r 140',
    'LSHIFT' => 'r 140',
    'AMPE' => 'r 140',
    'ACUE' => 'r 140',
    'PIPE' => 'r 140',
    'LESS' => 'r 140',
    'GREAT' => 'r 140',
    'EQUAL' => 'r 140',
    'GREATEQUAL' => 'r 140',
    'LESSEQUAL' => 'r 140',
    'DIFF' => 'r 140',
    'NOTEQUAL' => 'r 140',
    'IN' => 'r 140',
    'NOT' => 'r 140',
    'IS' => 'r 140',
    'AND' => 'r 140',
    'OR' => 'r 140',
    'IF' => 'r 140',
    'ASSIGN' => 'r 140',
    'PLUSEQUAL' => 'r 140',
    'MINUSEQUAL' => 'r 140',
    'STAREQUAL' => 'r 140',
    'SLASHEQUAL' => 'r 140',
    'MODEQUAL' => 'r 140',
    'AMPEQUAL' => 'r 140',
    'PIPEEQUAL' => 'r 140',
    'ACUEQUAL' => 'r 140',
    'LSHIFTEQUAL' => 'r 140',
    'RSHIFTEQUAL' => 'r 140',
    'DSTAREQUAL' => 'r 140',
    'DSLASHEQUAL' => 'r 140',
    'NEWLINE' => 'r 140',
    'COMMA' => 'r 140',
    'ELSE' => 'r 140',
    'RBC' => 'r 140',
    'COLON' => 'r 140',
    'SBC' => 'r 140',
  ),
  150 => 
  array (
    'NAME' => 's 151',
  ),
  151 => 
  array (
    'RBO' => 'r 141',
    'SBO' => 'r 141',
    'DOT' => 'r 141',
    'DSTAR' => 'r 141',
    'DSLASH' => 'r 141',
    'MOD' => 'r 141',
    'SLASH' => 'r 141',
    'STAR' => 'r 141',
    'MINUS' => 'r 141',
    'PLUS' => 'r 141',
    'RSHIFT' => 'r 141',
    'LSHIFT' => 'r 141',
    'AMPE' => 'r 141',
    'ACUE' => 'r 141',
    'PIPE' => 'r 141',
    'LESS' => 'r 141',
    'GREAT' => 'r 141',
    'EQUAL' => 'r 141',
    'GREATEQUAL' => 'r 141',
    'LESSEQUAL' => 'r 141',
    'DIFF' => 'r 141',
    'NOTEQUAL' => 'r 141',
    'IN' => 'r 141',
    'NOT' => 'r 141',
    'IS' => 'r 141',
    'AND' => 'r 141',
    'OR' => 'r 141',
    'IF' => 'r 141',
    'ASSIGN' => 'r 141',
    'PLUSEQUAL' => 'r 141',
    'MINUSEQUAL' => 'r 141',
    'STAREQUAL' => 'r 141',
    'SLASHEQUAL' => 'r 141',
    'MODEQUAL' => 'r 141',
    'AMPEQUAL' => 'r 141',
    'PIPEEQUAL' => 'r 141',
    'ACUEQUAL' => 'r 141',
    'LSHIFTEQUAL' => 'r 141',
    'RSHIFTEQUAL' => 'r 141',
    'DSTAREQUAL' => 'r 141',
    'DSLASHEQUAL' => 'r 141',
    'NEWLINE' => 'r 141',
    'COMMA' => 'r 141',
    'ELSE' => 'r 141',
    'RBC' => 'r 141',
    'COLON' => 'r 141',
    'SBC' => 'r 141',
  ),
  152 => 
  array (
    'RBO' => 'r 136',
    'SBO' => 'r 136',
    'DOT' => 'r 136',
    'DSTAR' => 'r 136',
    'DSLASH' => 'r 136',
    'MOD' => 'r 136',
    'SLASH' => 'r 136',
    'STAR' => 'r 136',
    'MINUS' => 'r 136',
    'PLUS' => 'r 136',
    'RSHIFT' => 'r 136',
    'LSHIFT' => 'r 136',
    'AMPE' => 'r 136',
    'ACUE' => 'r 136',
    'PIPE' => 'r 136',
    'LESS' => 'r 136',
    'GREAT' => 'r 136',
    'EQUAL' => 'r 136',
    'GREATEQUAL' => 'r 136',
    'LESSEQUAL' => 'r 136',
    'DIFF' => 'r 136',
    'NOTEQUAL' => 'r 136',
    'IN' => 'r 136',
    'NOT' => 'r 136',
    'IS' => 'r 136',
    'AND' => 'r 136',
    'OR' => 'r 136',
    'IF' => 'r 136',
    'ASSIGN' => 'r 136',
    'PLUSEQUAL' => 'r 136',
    'MINUSEQUAL' => 'r 136',
    'STAREQUAL' => 'r 136',
    'SLASHEQUAL' => 'r 136',
    'MODEQUAL' => 'r 136',
    'AMPEQUAL' => 'r 136',
    'PIPEEQUAL' => 'r 136',
    'ACUEQUAL' => 'r 136',
    'LSHIFTEQUAL' => 'r 136',
    'RSHIFTEQUAL' => 'r 136',
    'DSTAREQUAL' => 'r 136',
    'DSLASHEQUAL' => 'r 136',
    'NEWLINE' => 'r 136',
    'COMMA' => 'r 136',
    'ELSE' => 'r 136',
    'RBC' => 'r 136',
    'COLON' => 'r 136',
    'SBC' => 'r 136',
  ),
  153 => 
  array (
    'factor' => 's 154',
    'PLUS' => 's 93',
    'MINUS' => 's 95',
    'TILDE' => 's 97',
    'power' => 's 99',
    'atom' => 's 100',
    'SBO' => 's 104',
    'BO' => 's 111',
    'NAME' => 's 114',
    'NUMBER' => 's 115',
    'STRING' => 's 116',
    'TRIPLEDOT' => 's 117',
    'NONE' => 's 118',
    'TRUE' => 's 119',
    'FALSE' => 's 120',
  ),
  154 => 
  array (
    'MINUS' => 'r 125',
    'PLUS' => 'r 125',
    'RSHIFT' => 'r 125',
    'LSHIFT' => 'r 125',
    'AMPE' => 'r 125',
    'ACUE' => 'r 125',
    'PIPE' => 'r 125',
    'LESS' => 'r 125',
    'GREAT' => 'r 125',
    'EQUAL' => 'r 125',
    'GREATEQUAL' => 'r 125',
    'LESSEQUAL' => 'r 125',
    'DIFF' => 'r 125',
    'NOTEQUAL' => 'r 125',
    'IN' => 'r 125',
    'NOT' => 'r 125',
    'IS' => 'r 125',
    'AND' => 'r 125',
    'OR' => 'r 125',
    'IF' => 'r 125',
    'ASSIGN' => 'r 125',
    'PLUSEQUAL' => 'r 125',
    'MINUSEQUAL' => 'r 125',
    'STAREQUAL' => 'r 125',
    'SLASHEQUAL' => 'r 125',
    'MODEQUAL' => 'r 125',
    'AMPEQUAL' => 'r 125',
    'PIPEEQUAL' => 'r 125',
    'ACUEQUAL' => 'r 125',
    'LSHIFTEQUAL' => 'r 125',
    'RSHIFTEQUAL' => 'r 125',
    'DSTAREQUAL' => 'r 125',
    'DSLASHEQUAL' => 'r 125',
    'NEWLINE' => 'r 125',
    'COMMA' => 'r 125',
    'ELSE' => 'r 125',
    'RBC' => 'r 125',
    'COLON' => 'r 125',
    'SBC' => 'r 125',
  ),
  155 => 
  array (
    'factor' => 's 156',
    'PLUS' => 's 93',
    'MINUS' => 's 95',
    'TILDE' => 's 97',
    'power' => 's 99',
    'atom' => 's 100',
    'SBO' => 's 104',
    'BO' => 's 111',
    'NAME' => 's 114',
    'NUMBER' => 's 115',
    'STRING' => 's 116',
    'TRIPLEDOT' => 's 117',
    'NONE' => 's 118',
    'TRUE' => 's 119',
    'FALSE' => 's 120',
  ),
  156 => 
  array (
    'MINUS' => 'r 126',
    'PLUS' => 'r 126',
    'RSHIFT' => 'r 126',
    'LSHIFT' => 'r 126',
    'AMPE' => 'r 126',
    'ACUE' => 'r 126',
    'PIPE' => 'r 126',
    'LESS' => 'r 126',
    'GREAT' => 'r 126',
    'EQUAL' => 'r 126',
    'GREATEQUAL' => 'r 126',
    'LESSEQUAL' => 'r 126',
    'DIFF' => 'r 126',
    'NOTEQUAL' => 'r 126',
    'IN' => 'r 126',
    'NOT' => 'r 126',
    'IS' => 'r 126',
    'AND' => 'r 126',
    'OR' => 'r 126',
    'IF' => 'r 126',
    'ASSIGN' => 'r 126',
    'PLUSEQUAL' => 'r 126',
    'MINUSEQUAL' => 'r 126',
    'STAREQUAL' => 'r 126',
    'SLASHEQUAL' => 'r 126',
    'MODEQUAL' => 'r 126',
    'AMPEQUAL' => 'r 126',
    'PIPEEQUAL' => 'r 126',
    'ACUEQUAL' => 'r 126',
    'LSHIFTEQUAL' => 'r 126',
    'RSHIFTEQUAL' => 'r 126',
    'DSTAREQUAL' => 'r 126',
    'DSLASHEQUAL' => 'r 126',
    'NEWLINE' => 'r 126',
    'COMMA' => 'r 126',
    'ELSE' => 'r 126',
    'RBC' => 'r 126',
    'COLON' => 'r 126',
    'SBC' => 'r 126',
  ),
  157 => 
  array (
    'factor' => 's 158',
    'PLUS' => 's 93',
    'MINUS' => 's 95',
    'TILDE' => 's 97',
    'power' => 's 99',
    'atom' => 's 100',
    'SBO' => 's 104',
    'BO' => 's 111',
    'NAME' => 's 114',
    'NUMBER' => 's 115',
    'STRING' => 's 116',
    'TRIPLEDOT' => 's 117',
    'NONE' => 's 118',
    'TRUE' => 's 119',
    'FALSE' => 's 120',
  ),
  158 => 
  array (
    'MINUS' => 'r 127',
    'PLUS' => 'r 127',
    'RSHIFT' => 'r 127',
    'LSHIFT' => 'r 127',
    'AMPE' => 'r 127',
    'ACUE' => 'r 127',
    'PIPE' => 'r 127',
    'LESS' => 'r 127',
    'GREAT' => 'r 127',
    'EQUAL' => 'r 127',
    'GREATEQUAL' => 'r 127',
    'LESSEQUAL' => 'r 127',
    'DIFF' => 'r 127',
    'NOTEQUAL' => 'r 127',
    'IN' => 'r 127',
    'NOT' => 'r 127',
    'IS' => 'r 127',
    'AND' => 'r 127',
    'OR' => 'r 127',
    'IF' => 'r 127',
    'ASSIGN' => 'r 127',
    'PLUSEQUAL' => 'r 127',
    'MINUSEQUAL' => 'r 127',
    'STAREQUAL' => 'r 127',
    'SLASHEQUAL' => 'r 127',
    'MODEQUAL' => 'r 127',
    'AMPEQUAL' => 'r 127',
    'PIPEEQUAL' => 'r 127',
    'ACUEQUAL' => 'r 127',
    'LSHIFTEQUAL' => 'r 127',
    'RSHIFTEQUAL' => 'r 127',
    'DSTAREQUAL' => 'r 127',
    'DSLASHEQUAL' => 'r 127',
    'NEWLINE' => 'r 127',
    'COMMA' => 'r 127',
    'ELSE' => 'r 127',
    'RBC' => 'r 127',
    'COLON' => 'r 127',
    'SBC' => 'r 127',
  ),
  159 => 
  array (
    'term' => 's 160',
    'factor' => 's 90',
    'PLUS' => 's 93',
    'MINUS' => 's 95',
    'TILDE' => 's 97',
    'power' => 's 99',
    'atom' => 's 100',
    'SBO' => 's 104',
    'BO' => 's 111',
    'NAME' => 's 114',
    'NUMBER' => 's 115',
    'STRING' => 's 116',
    'TRIPLEDOT' => 's 117',
    'NONE' => 's 118',
    'TRUE' => 's 119',
    'FALSE' => 's 120',
  ),
  160 => 
  array (
    'RSHIFT' => 'r 122',
    'LSHIFT' => 'r 122',
    'AMPE' => 'r 122',
    'ACUE' => 'r 122',
    'PIPE' => 'r 122',
    'LESS' => 'r 122',
    'GREAT' => 'r 122',
    'EQUAL' => 'r 122',
    'GREATEQUAL' => 'r 122',
    'LESSEQUAL' => 'r 122',
    'DIFF' => 'r 122',
    'NOTEQUAL' => 'r 122',
    'IN' => 'r 122',
    'NOT' => 'r 122',
    'IS' => 'r 122',
    'AND' => 'r 122',
    'OR' => 'r 122',
    'IF' => 'r 122',
    'ASSIGN' => 'r 122',
    'PLUSEQUAL' => 'r 122',
    'MINUSEQUAL' => 'r 122',
    'STAREQUAL' => 'r 122',
    'SLASHEQUAL' => 'r 122',
    'MODEQUAL' => 'r 122',
    'AMPEQUAL' => 'r 122',
    'PIPEEQUAL' => 'r 122',
    'ACUEQUAL' => 'r 122',
    'LSHIFTEQUAL' => 'r 122',
    'RSHIFTEQUAL' => 'r 122',
    'DSTAREQUAL' => 'r 122',
    'DSLASHEQUAL' => 'r 122',
    'NEWLINE' => 'r 122',
    'COMMA' => 'r 122',
    'ELSE' => 'r 122',
    'RBC' => 'r 122',
    'COLON' => 'r 122',
    'SBC' => 'r 122',
  ),
  161 => 
  array (
    'arith_expr' => 's 162',
    'term' => 's 87',
    'factor' => 's 90',
    'PLUS' => 's 93',
    'MINUS' => 's 95',
    'TILDE' => 's 97',
    'power' => 's 99',
    'atom' => 's 100',
    'SBO' => 's 104',
    'BO' => 's 111',
    'NAME' => 's 114',
    'NUMBER' => 's 115',
    'STRING' => 's 116',
    'TRIPLEDOT' => 's 117',
    'NONE' => 's 118',
    'TRUE' => 's 119',
    'FALSE' => 's 120',
  ),
  162 => 
  array (
    'AMPE' => 'r 119',
    'ACUE' => 'r 119',
    'PIPE' => 'r 119',
    'LESS' => 'r 119',
    'GREAT' => 'r 119',
    'EQUAL' => 'r 119',
    'GREATEQUAL' => 'r 119',
    'LESSEQUAL' => 'r 119',
    'DIFF' => 'r 119',
    'NOTEQUAL' => 'r 119',
    'IN' => 'r 119',
    'NOT' => 'r 119',
    'IS' => 'r 119',
    'AND' => 'r 119',
    'OR' => 'r 119',
    'IF' => 'r 119',
    'ASSIGN' => 'r 119',
    'PLUSEQUAL' => 'r 119',
    'MINUSEQUAL' => 'r 119',
    'STAREQUAL' => 'r 119',
    'SLASHEQUAL' => 'r 119',
    'MODEQUAL' => 'r 119',
    'AMPEQUAL' => 'r 119',
    'PIPEEQUAL' => 'r 119',
    'ACUEQUAL' => 'r 119',
    'LSHIFTEQUAL' => 'r 119',
    'RSHIFTEQUAL' => 'r 119',
    'DSTAREQUAL' => 'r 119',
    'DSLASHEQUAL' => 'r 119',
    'NEWLINE' => 'r 119',
    'COMMA' => 'r 119',
    'ELSE' => 'r 119',
    'RBC' => 'r 119',
    'COLON' => 'r 119',
    'SBC' => 'r 119',
  ),
  163 => 
  array (
    'PLUS' => 'r 101',
    'MINUS' => 'r 101',
    'TILDE' => 'r 101',
    'SBO' => 'r 101',
    'BO' => 'r 101',
    'NAME' => 'r 101',
    'NUMBER' => 'r 101',
    'STRING' => 'r 101',
    'TRIPLEDOT' => 'r 101',
    'NONE' => 'r 101',
    'TRUE' => 'r 101',
    'FALSE' => 'r 101',
  ),
  164 => 
  array (
    'PLUS' => 'r 102',
    'MINUS' => 'r 102',
    'TILDE' => 'r 102',
    'SBO' => 'r 102',
    'BO' => 'r 102',
    'NAME' => 'r 102',
    'NUMBER' => 'r 102',
    'STRING' => 'r 102',
    'TRIPLEDOT' => 'r 102',
    'NONE' => 'r 102',
    'TRUE' => 'r 102',
    'FALSE' => 'r 102',
  ),
  165 => 
  array (
    'PLUS' => 'r 103',
    'MINUS' => 'r 103',
    'TILDE' => 'r 103',
    'SBO' => 'r 103',
    'BO' => 'r 103',
    'NAME' => 'r 103',
    'NUMBER' => 'r 103',
    'STRING' => 'r 103',
    'TRIPLEDOT' => 'r 103',
    'NONE' => 'r 103',
    'TRUE' => 'r 103',
    'FALSE' => 'r 103',
  ),
  166 => 
  array (
    'PLUS' => 'r 104',
    'MINUS' => 'r 104',
    'TILDE' => 'r 104',
    'SBO' => 'r 104',
    'BO' => 'r 104',
    'NAME' => 'r 104',
    'NUMBER' => 'r 104',
    'STRING' => 'r 104',
    'TRIPLEDOT' => 'r 104',
    'NONE' => 'r 104',
    'TRUE' => 'r 104',
    'FALSE' => 'r 104',
  ),
  167 => 
  array (
    'PLUS' => 'r 105',
    'MINUS' => 'r 105',
    'TILDE' => 'r 105',
    'SBO' => 'r 105',
    'BO' => 'r 105',
    'NAME' => 'r 105',
    'NUMBER' => 'r 105',
    'STRING' => 'r 105',
    'TRIPLEDOT' => 'r 105',
    'NONE' => 'r 105',
    'TRUE' => 'r 105',
    'FALSE' => 'r 105',
  ),
  168 => 
  array (
    'PLUS' => 'r 106',
    'MINUS' => 'r 106',
    'TILDE' => 'r 106',
    'SBO' => 'r 106',
    'BO' => 'r 106',
    'NAME' => 'r 106',
    'NUMBER' => 'r 106',
    'STRING' => 'r 106',
    'TRIPLEDOT' => 'r 106',
    'NONE' => 'r 106',
    'TRUE' => 'r 106',
    'FALSE' => 'r 106',
  ),
  169 => 
  array (
    'PLUS' => 'r 107',
    'MINUS' => 'r 107',
    'TILDE' => 'r 107',
    'SBO' => 'r 107',
    'BO' => 'r 107',
    'NAME' => 'r 107',
    'NUMBER' => 'r 107',
    'STRING' => 'r 107',
    'TRIPLEDOT' => 'r 107',
    'NONE' => 'r 107',
    'TRUE' => 'r 107',
    'FALSE' => 'r 107',
  ),
  170 => 
  array (
    'PLUS' => 'r 108',
    'MINUS' => 'r 108',
    'TILDE' => 'r 108',
    'SBO' => 'r 108',
    'BO' => 'r 108',
    'NAME' => 'r 108',
    'NUMBER' => 'r 108',
    'STRING' => 'r 108',
    'TRIPLEDOT' => 'r 108',
    'NONE' => 'r 108',
    'TRUE' => 'r 108',
    'FALSE' => 'r 108',
  ),
  171 => 
  array (
    'IN' => 's 172',
  ),
  172 => 
  array (
    'PLUS' => 'r 109',
    'MINUS' => 'r 109',
    'TILDE' => 'r 109',
    'SBO' => 'r 109',
    'BO' => 'r 109',
    'NAME' => 'r 109',
    'NUMBER' => 'r 109',
    'STRING' => 'r 109',
    'TRIPLEDOT' => 'r 109',
    'NONE' => 'r 109',
    'TRUE' => 'r 109',
    'FALSE' => 'r 109',
  ),
  173 => 
  array (
    'NOT' => 's 174',
    'PLUS' => 'r 110',
    'MINUS' => 'r 110',
    'TILDE' => 'r 110',
    'SBO' => 'r 110',
    'BO' => 'r 110',
    'NAME' => 'r 110',
    'NUMBER' => 'r 110',
    'STRING' => 'r 110',
    'TRIPLEDOT' => 'r 110',
    'NONE' => 'r 110',
    'TRUE' => 'r 110',
    'FALSE' => 'r 110',
  ),
  174 => 
  array (
    'PLUS' => 'r 111',
    'MINUS' => 'r 111',
    'TILDE' => 'r 111',
    'SBO' => 'r 111',
    'BO' => 'r 111',
    'NAME' => 'r 111',
    'NUMBER' => 'r 111',
    'STRING' => 'r 111',
    'TRIPLEDOT' => 'r 111',
    'NONE' => 'r 111',
    'TRUE' => 'r 111',
    'FALSE' => 'r 111',
  ),
  175 => 
  array (
    'DSTAR' => 'r 40',
    'NAME' => 'r 40',
    'RBO' => 'r 40',
    'STAR' => 'r 40',
  ),
  176 => 
  array (
    'COMMA' => 'r 46',
    'EQUAL' => 'r 46',
    'RBC' => 'r 46',
  ),
  177 => 
  array (
    'NAME' => 's 176',
    'RBO' => 's 177',
    'fplist' => 's 178',
    'fpdef' => 's 180',
  ),
  178 => 
  array (
    'RBC' => 's 179',
  ),
  179 => 
  array (
    'COMMA' => 'r 47',
    'EQUAL' => 'r 47',
    'RBC' => 'r 47',
  ),
  180 => 
  array (
    'fpdefs' => 's 181',
    'COMMA' => 's 184',
    'RBC' => 'r 52',
  ),
  181 => 
  array (
    'COMMA' => 's 182',
    'RBC' => 'r 49',
  ),
  182 => 
  array (
    'NAME' => 's 176',
    'RBO' => 's 177',
    'fpdef' => 's 183',
    'RBC' => 'r 48',
  ),
  183 => 
  array (
    'COMMA' => 'r 50',
    'RBC' => 'r 50',
  ),
  184 => 
  array (
    'NAME' => 's 176',
    'RBO' => 's 177',
    'fpdef' => 's 185',
  ),
  185 => 
  array (
    'COMMA' => 'r 51',
    'RBC' => 'r 51',
  ),
  186 => 
  array (
    'EQUAL' => 's 187',
    'fpdef_lc_star' => 's 197',
    'COMMA' => 's 199',
    'fpdef_lc' => 's 196',
    'RBC' => 'r 43',
  ),
  187 => 
  array (
    'test' => 's 188',
    'or_test' => 's 57',
    'lambdef' => 's 62',
    'and_test' => 's 63',
    'not_test' => 's 66',
    'NOT' => 's 69',
    'comparison' => 's 71',
    'expr' => 's 72',
    'xor_expr' => 's 75',
    'and_expr' => 's 78',
    'shift_expr' => 's 81',
    'arith_expr' => 's 84',
    'term' => 's 87',
    'factor' => 's 90',
    'PLUS' => 's 93',
    'MINUS' => 's 95',
    'TILDE' => 's 97',
    'power' => 's 99',
    'atom' => 's 100',
    'SBO' => 's 104',
    'BO' => 's 111',
    'NAME' => 's 114',
    'NUMBER' => 's 115',
    'STRING' => 's 116',
    'TRIPLEDOT' => 's 117',
    'NONE' => 's 118',
    'TRUE' => 's 119',
    'FALSE' => 's 120',
  ),
  188 => 
  array (
    'fpdef_lc_star' => 's 189',
    'COMMA' => 's 195',
    'fpdef_lc' => 's 196',
    'RBC' => 'r 43',
  ),
  189 => 
  array (
    'COMMA' => 's 190',
    'fpdef_lc' => 's 194',
    'RBC' => 'r 34',
  ),
  190 => 
  array (
    'fpdef' => 's 191',
    'NAME' => 's 176',
    'RBO' => 's 177',
    'RBC' => 'r 32',
  ),
  191 => 
  array (
    'EQUAL' => 's 192',
    'COMMA' => 'r 45',
    'RBC' => 'r 45',
  ),
  192 => 
  array (
    'test' => 's 193',
    'or_test' => 's 57',
    'lambdef' => 's 62',
    'and_test' => 's 63',
    'not_test' => 's 66',
    'NOT' => 's 69',
    'comparison' => 's 71',
    'expr' => 's 72',
    'xor_expr' => 's 75',
    'and_expr' => 's 78',
    'shift_expr' => 's 81',
    'arith_expr' => 's 84',
    'term' => 's 87',
    'factor' => 's 90',
    'PLUS' => 's 93',
    'MINUS' => 's 95',
    'TILDE' => 's 97',
    'power' => 's 99',
    'atom' => 's 100',
    'SBO' => 's 104',
    'BO' => 's 111',
    'NAME' => 's 114',
    'NUMBER' => 's 115',
    'STRING' => 's 116',
    'TRIPLEDOT' => 's 117',
    'NONE' => 's 118',
    'TRUE' => 's 119',
    'FALSE' => 's 120',
  ),
  193 => 
  array (
    'COMMA' => 'r 44',
    'RBC' => 'r 44',
  ),
  194 => 
  array (
    'COMMA' => 'r 41',
    'RBC' => 'r 41',
  ),
  195 => 
  array (
    'fpdef' => 's 191',
    'NAME' => 's 176',
    'RBO' => 's 177',
    'DSTAR' => 'r 39',
    'STAR' => 'r 39',
  ),
  196 => 
  array (
    'COMMA' => 'r 42',
    'RBC' => 'r 42',
  ),
  197 => 
  array (
    'COMMA' => 's 198',
    'fpdef_lc' => 's 194',
    'RBC' => 'r 35',
  ),
  198 => 
  array (
    'fpdef' => 's 191',
    'NAME' => 's 176',
    'RBO' => 's 177',
    'RBC' => 'r 33',
  ),
  199 => 
  array (
    'fpdef' => 's 191',
    'NAME' => 's 176',
    'RBO' => 's 177',
    'DSTAR' => 'r 40',
    'STAR' => 'r 40',
  ),
  200 => 
  array (
    'DSTAR' => 'r 37',
    'NAME' => 'r 37',
    'RBO' => 'r 37',
    'STAR' => 'r 37',
  ),
  201 => 
  array (
    'small_stmt' => 's 6',
    'expr_stmt' => 's 8',
    'print_stmt' => 's 9',
    'flow_stmt' => 's 10',
    'import_stmt' => 's 11',
    'import_name' => 's 12',
    'import_from' => 's 13',
    'IMPORT' => 's 14',
    'FROM' => 's 25',
    'suite' => 's 202',
    'testlist' => 's 203',
    'PRINT' => 's 223',
    'return_stmt' => 's 225',
    'RETURN' => 's 226',
    'simple_stmt' => 's 228',
    'NEWLINE' => 's 229',
    'test' => 's 207',
    'or_test' => 's 57',
    'lambdef' => 's 62',
    'and_test' => 's 63',
    'not_test' => 's 66',
    'NOT' => 's 69',
    'comparison' => 's 71',
    'expr' => 's 72',
    'xor_expr' => 's 75',
    'and_expr' => 's 78',
    'shift_expr' => 's 81',
    'arith_expr' => 's 84',
    'term' => 's 87',
    'factor' => 's 90',
    'PLUS' => 's 93',
    'MINUS' => 's 95',
    'TILDE' => 's 97',
    'power' => 's 99',
    'atom' => 's 100',
    'SBO' => 's 104',
    'BO' => 's 111',
    'NAME' => 's 114',
    'NUMBER' => 's 115',
    'STRING' => 's 116',
    'TRIPLEDOT' => 's 117',
    'NONE' => 's 118',
    'TRUE' => 's 119',
    'FALSE' => 's 120',
  ),
  202 => 
  array (
    'ENDMARKER' => 'r 26',
    'DEF' => 'r 26',
    'WHILE' => 'r 26',
    'CLASS' => 'r 26',
    'PRINT' => 'r 26',
    'IF' => 'r 26',
    'RETURN' => 'r 26',
    'IMPORT' => 'r 26',
    'FROM' => 'r 26',
    'lambdef' => 'r 26',
    'NOT' => 'r 26',
    'PLUS' => 'r 26',
    'MINUS' => 'r 26',
    'TILDE' => 'r 26',
    'SBO' => 'r 26',
    'BO' => 'r 26',
    'NAME' => 'r 26',
    'NUMBER' => 'r 26',
    'STRING' => 'r 26',
    'TRIPLEDOT' => 'r 26',
    'NONE' => 'r 26',
    'TRUE' => 'r 26',
    'FALSE' => 'r 26',
    'DEDENT' => 'r 26',
  ),
  203 => 
  array (
    'augassign' => 's 204',
    'ASSIGN' => 's 208',
    'PLUSEQUAL' => 's 211',
    'MINUSEQUAL' => 's 212',
    'STAREQUAL' => 's 213',
    'SLASHEQUAL' => 's 214',
    'MODEQUAL' => 's 215',
    'AMPEQUAL' => 's 216',
    'PIPEEQUAL' => 's 217',
    'ACUEQUAL' => 's 218',
    'LSHIFTEQUAL' => 's 219',
    'RSHIFTEQUAL' => 's 220',
    'DSTAREQUAL' => 's 221',
    'DSLASHEQUAL' => 's 222',
    'NEWLINE' => 'r 57',
  ),
  204 => 
  array (
    'yield_expr' => 's 205',
    'testlist' => 's 206',
    'test' => 's 207',
    'or_test' => 's 57',
    'lambdef' => 's 62',
    'and_test' => 's 63',
    'not_test' => 's 66',
    'NOT' => 's 69',
    'comparison' => 's 71',
    'expr' => 's 72',
    'xor_expr' => 's 75',
    'and_expr' => 's 78',
    'shift_expr' => 's 81',
    'arith_expr' => 's 84',
    'term' => 's 87',
    'factor' => 's 90',
    'PLUS' => 's 93',
    'MINUS' => 's 95',
    'TILDE' => 's 97',
    'power' => 's 99',
    'atom' => 's 100',
    'SBO' => 's 104',
    'BO' => 's 111',
    'NAME' => 's 114',
    'NUMBER' => 's 115',
    'STRING' => 's 116',
    'TRIPLEDOT' => 's 117',
    'NONE' => 's 118',
    'TRUE' => 's 119',
    'FALSE' => 's 120',
  ),
  205 => 
  array (
    'NEWLINE' => 'r 53',
  ),
  206 => 
  array (
    'NEWLINE' => 'r 54',
  ),
  207 => 
  array (
    'ASSIGN' => 'r 89',
    'PLUSEQUAL' => 'r 89',
    'MINUSEQUAL' => 'r 89',
    'STAREQUAL' => 'r 89',
    'SLASHEQUAL' => 'r 89',
    'MODEQUAL' => 'r 89',
    'AMPEQUAL' => 'r 89',
    'PIPEEQUAL' => 'r 89',
    'ACUEQUAL' => 'r 89',
    'LSHIFTEQUAL' => 'r 89',
    'RSHIFTEQUAL' => 'r 89',
    'DSTAREQUAL' => 'r 89',
    'DSLASHEQUAL' => 'r 89',
    'NEWLINE' => 'r 89',
    'RBC' => 'r 89',
  ),
  208 => 
  array (
    'yield_expr' => 's 209',
    'testlist' => 's 210',
    'test' => 's 207',
    'or_test' => 's 57',
    'lambdef' => 's 62',
    'and_test' => 's 63',
    'not_test' => 's 66',
    'NOT' => 's 69',
    'comparison' => 's 71',
    'expr' => 's 72',
    'xor_expr' => 's 75',
    'and_expr' => 's 78',
    'shift_expr' => 's 81',
    'arith_expr' => 's 84',
    'term' => 's 87',
    'factor' => 's 90',
    'PLUS' => 's 93',
    'MINUS' => 's 95',
    'TILDE' => 's 97',
    'power' => 's 99',
    'atom' => 's 100',
    'SBO' => 's 104',
    'BO' => 's 111',
    'NAME' => 's 114',
    'NUMBER' => 's 115',
    'STRING' => 's 116',
    'TRIPLEDOT' => 's 117',
    'NONE' => 's 118',
    'TRUE' => 's 119',
    'FALSE' => 's 120',
  ),
  209 => 
  array (
    'NEWLINE' => 'r 55',
  ),
  210 => 
  array (
    'NEWLINE' => 'r 56',
  ),
  211 => 
  array (
    'lambdef' => 'r 58',
    'NOT' => 'r 58',
    'PLUS' => 'r 58',
    'MINUS' => 'r 58',
    'TILDE' => 'r 58',
    'SBO' => 'r 58',
    'BO' => 'r 58',
    'NAME' => 'r 58',
    'NUMBER' => 'r 58',
    'STRING' => 'r 58',
    'TRIPLEDOT' => 'r 58',
    'NONE' => 'r 58',
    'TRUE' => 'r 58',
    'FALSE' => 'r 58',
    'yield_expr' => 'r 58',
  ),
  212 => 
  array (
    'lambdef' => 'r 59',
    'NOT' => 'r 59',
    'PLUS' => 'r 59',
    'MINUS' => 'r 59',
    'TILDE' => 'r 59',
    'SBO' => 'r 59',
    'BO' => 'r 59',
    'NAME' => 'r 59',
    'NUMBER' => 'r 59',
    'STRING' => 'r 59',
    'TRIPLEDOT' => 'r 59',
    'NONE' => 'r 59',
    'TRUE' => 'r 59',
    'FALSE' => 'r 59',
    'yield_expr' => 'r 59',
  ),
  213 => 
  array (
    'lambdef' => 'r 60',
    'NOT' => 'r 60',
    'PLUS' => 'r 60',
    'MINUS' => 'r 60',
    'TILDE' => 'r 60',
    'SBO' => 'r 60',
    'BO' => 'r 60',
    'NAME' => 'r 60',
    'NUMBER' => 'r 60',
    'STRING' => 'r 60',
    'TRIPLEDOT' => 'r 60',
    'NONE' => 'r 60',
    'TRUE' => 'r 60',
    'FALSE' => 'r 60',
    'yield_expr' => 'r 60',
  ),
  214 => 
  array (
    'lambdef' => 'r 61',
    'NOT' => 'r 61',
    'PLUS' => 'r 61',
    'MINUS' => 'r 61',
    'TILDE' => 'r 61',
    'SBO' => 'r 61',
    'BO' => 'r 61',
    'NAME' => 'r 61',
    'NUMBER' => 'r 61',
    'STRING' => 'r 61',
    'TRIPLEDOT' => 'r 61',
    'NONE' => 'r 61',
    'TRUE' => 'r 61',
    'FALSE' => 'r 61',
    'yield_expr' => 'r 61',
  ),
  215 => 
  array (
    'lambdef' => 'r 62',
    'NOT' => 'r 62',
    'PLUS' => 'r 62',
    'MINUS' => 'r 62',
    'TILDE' => 'r 62',
    'SBO' => 'r 62',
    'BO' => 'r 62',
    'NAME' => 'r 62',
    'NUMBER' => 'r 62',
    'STRING' => 'r 62',
    'TRIPLEDOT' => 'r 62',
    'NONE' => 'r 62',
    'TRUE' => 'r 62',
    'FALSE' => 'r 62',
    'yield_expr' => 'r 62',
  ),
  216 => 
  array (
    'lambdef' => 'r 63',
    'NOT' => 'r 63',
    'PLUS' => 'r 63',
    'MINUS' => 'r 63',
    'TILDE' => 'r 63',
    'SBO' => 'r 63',
    'BO' => 'r 63',
    'NAME' => 'r 63',
    'NUMBER' => 'r 63',
    'STRING' => 'r 63',
    'TRIPLEDOT' => 'r 63',
    'NONE' => 'r 63',
    'TRUE' => 'r 63',
    'FALSE' => 'r 63',
    'yield_expr' => 'r 63',
  ),
  217 => 
  array (
    'lambdef' => 'r 64',
    'NOT' => 'r 64',
    'PLUS' => 'r 64',
    'MINUS' => 'r 64',
    'TILDE' => 'r 64',
    'SBO' => 'r 64',
    'BO' => 'r 64',
    'NAME' => 'r 64',
    'NUMBER' => 'r 64',
    'STRING' => 'r 64',
    'TRIPLEDOT' => 'r 64',
    'NONE' => 'r 64',
    'TRUE' => 'r 64',
    'FALSE' => 'r 64',
    'yield_expr' => 'r 64',
  ),
  218 => 
  array (
    'lambdef' => 'r 65',
    'NOT' => 'r 65',
    'PLUS' => 'r 65',
    'MINUS' => 'r 65',
    'TILDE' => 'r 65',
    'SBO' => 'r 65',
    'BO' => 'r 65',
    'NAME' => 'r 65',
    'NUMBER' => 'r 65',
    'STRING' => 'r 65',
    'TRIPLEDOT' => 'r 65',
    'NONE' => 'r 65',
    'TRUE' => 'r 65',
    'FALSE' => 'r 65',
    'yield_expr' => 'r 65',
  ),
  219 => 
  array (
    'lambdef' => 'r 66',
    'NOT' => 'r 66',
    'PLUS' => 'r 66',
    'MINUS' => 'r 66',
    'TILDE' => 'r 66',
    'SBO' => 'r 66',
    'BO' => 'r 66',
    'NAME' => 'r 66',
    'NUMBER' => 'r 66',
    'STRING' => 'r 66',
    'TRIPLEDOT' => 'r 66',
    'NONE' => 'r 66',
    'TRUE' => 'r 66',
    'FALSE' => 'r 66',
    'yield_expr' => 'r 66',
  ),
  220 => 
  array (
    'lambdef' => 'r 67',
    'NOT' => 'r 67',
    'PLUS' => 'r 67',
    'MINUS' => 'r 67',
    'TILDE' => 'r 67',
    'SBO' => 'r 67',
    'BO' => 'r 67',
    'NAME' => 'r 67',
    'NUMBER' => 'r 67',
    'STRING' => 'r 67',
    'TRIPLEDOT' => 'r 67',
    'NONE' => 'r 67',
    'TRUE' => 'r 67',
    'FALSE' => 'r 67',
    'yield_expr' => 'r 67',
  ),
  221 => 
  array (
    'lambdef' => 'r 68',
    'NOT' => 'r 68',
    'PLUS' => 'r 68',
    'MINUS' => 'r 68',
    'TILDE' => 'r 68',
    'SBO' => 'r 68',
    'BO' => 'r 68',
    'NAME' => 'r 68',
    'NUMBER' => 'r 68',
    'STRING' => 'r 68',
    'TRIPLEDOT' => 'r 68',
    'NONE' => 'r 68',
    'TRUE' => 'r 68',
    'FALSE' => 'r 68',
    'yield_expr' => 'r 68',
  ),
  222 => 
  array (
    'lambdef' => 'r 69',
    'NOT' => 'r 69',
    'PLUS' => 'r 69',
    'MINUS' => 'r 69',
    'TILDE' => 'r 69',
    'SBO' => 'r 69',
    'BO' => 'r 69',
    'NAME' => 'r 69',
    'NUMBER' => 'r 69',
    'STRING' => 'r 69',
    'TRIPLEDOT' => 'r 69',
    'NONE' => 'r 69',
    'TRUE' => 'r 69',
    'FALSE' => 'r 69',
    'yield_expr' => 'r 69',
  ),
  223 => 
  array (
    'test' => 's 224',
    'or_test' => 's 57',
    'lambdef' => 's 62',
    'and_test' => 's 63',
    'not_test' => 's 66',
    'NOT' => 's 69',
    'comparison' => 's 71',
    'expr' => 's 72',
    'xor_expr' => 's 75',
    'and_expr' => 's 78',
    'shift_expr' => 's 81',
    'arith_expr' => 's 84',
    'term' => 's 87',
    'factor' => 's 90',
    'PLUS' => 's 93',
    'MINUS' => 's 95',
    'TILDE' => 's 97',
    'power' => 's 99',
    'atom' => 's 100',
    'SBO' => 's 104',
    'BO' => 's 111',
    'NAME' => 's 114',
    'NUMBER' => 's 115',
    'STRING' => 's 116',
    'TRIPLEDOT' => 's 117',
    'NONE' => 's 118',
    'TRUE' => 's 119',
    'FALSE' => 's 120',
  ),
  224 => 
  array (
    'NEWLINE' => 'r 83',
  ),
  225 => 
  array (
    'NEWLINE' => 'r 84',
  ),
  226 => 
  array (
    'testlist' => 's 227',
    'test' => 's 207',
    'or_test' => 's 57',
    'lambdef' => 's 62',
    'and_test' => 's 63',
    'not_test' => 's 66',
    'NOT' => 's 69',
    'comparison' => 's 71',
    'expr' => 's 72',
    'xor_expr' => 's 75',
    'and_expr' => 's 78',
    'shift_expr' => 's 81',
    'arith_expr' => 's 84',
    'term' => 's 87',
    'factor' => 's 90',
    'PLUS' => 's 93',
    'MINUS' => 's 95',
    'TILDE' => 's 97',
    'power' => 's 99',
    'atom' => 's 100',
    'SBO' => 's 104',
    'BO' => 's 111',
    'NAME' => 's 114',
    'NUMBER' => 's 115',
    'STRING' => 's 116',
    'TRIPLEDOT' => 's 117',
    'NONE' => 's 118',
    'TRUE' => 's 119',
    'FALSE' => 's 120',
    'NEWLINE' => 'r 86',
  ),
  227 => 
  array (
    'NEWLINE' => 'r 85',
  ),
  228 => 
  array (
    'ENDMARKER' => 'r 87',
    'DEF' => 'r 87',
    'WHILE' => 'r 87',
    'CLASS' => 'r 87',
    'PRINT' => 'r 87',
    'IF' => 'r 87',
    'RETURN' => 'r 87',
    'IMPORT' => 'r 87',
    'FROM' => 'r 87',
    'lambdef' => 'r 87',
    'NOT' => 'r 87',
    'PLUS' => 'r 87',
    'MINUS' => 'r 87',
    'TILDE' => 'r 87',
    'SBO' => 'r 87',
    'BO' => 'r 87',
    'NAME' => 'r 87',
    'NUMBER' => 'r 87',
    'STRING' => 'r 87',
    'TRIPLEDOT' => 'r 87',
    'NONE' => 'r 87',
    'TRUE' => 'r 87',
    'FALSE' => 'r 87',
    'DEDENT' => 'r 87',
    'ELSE' => 'r 87',
  ),
  229 => 
  array (
    'INDENT' => 's 230',
  ),
  230 => 
  array (
    'stmt_loads' => 's 231',
    'stmt_block' => 's 270',
    'simple_stmt' => 's 4',
    'compound_stmt' => 's 5',
    'small_stmt' => 's 6',
    'expr_stmt' => 's 8',
    'print_stmt' => 's 9',
    'flow_stmt' => 's 10',
    'import_stmt' => 's 11',
    'import_name' => 's 12',
    'import_from' => 's 13',
    'IMPORT' => 's 14',
    'FROM' => 's 25',
    'DEF' => 's 36',
    '\'funcdef\'25' => 's 201',
    'testlist' => 's 203',
    'if_stmt' => 's 232',
    'while_stmt' => 's 233',
    'funcdef' => 's 234',
    'classdef' => 's 235',
    'if_stmt_simple' => 's 236',
    'if_stmt_with_else' => 's 237',
    'IF' => 's 238',
    '\'if_stmt_simple\'76' => 's 241',
    '\'if_stmt_with_else\'78' => 's 243',
    '\'if_stmt_with_else\'79' => 's 247',
    'WHILE' => 's 249',
    'PRINT' => 's 223',
    'return_stmt' => 's 225',
    'RETURN' => 's 226',
    'test' => 's 207',
    'or_test' => 's 57',
    'lambdef' => 's 62',
    'and_test' => 's 63',
    'not_test' => 's 66',
    'NOT' => 's 69',
    'comparison' => 's 71',
    'expr' => 's 72',
    'xor_expr' => 's 75',
    'and_expr' => 's 78',
    'shift_expr' => 's 81',
    'arith_expr' => 's 84',
    'term' => 's 87',
    'factor' => 's 90',
    'PLUS' => 's 93',
    'MINUS' => 's 95',
    'TILDE' => 's 97',
    'power' => 's 99',
    'atom' => 's 100',
    'SBO' => 's 104',
    'BO' => 's 111',
    'NAME' => 's 114',
    'NUMBER' => 's 115',
    'STRING' => 's 116',
    'TRIPLEDOT' => 's 117',
    'NONE' => 's 118',
    'TRUE' => 's 119',
    'FALSE' => 's 120',
    'CLASS' => 's 257',
    '\'classdef\'173' => 's 268',
  ),
  231 => 
  array (
    'stmt_block' => 's 3',
    'simple_stmt' => 's 4',
    'compound_stmt' => 's 5',
    'small_stmt' => 's 6',
    'expr_stmt' => 's 8',
    'print_stmt' => 's 9',
    'flow_stmt' => 's 10',
    'import_stmt' => 's 11',
    'import_name' => 's 12',
    'import_from' => 's 13',
    'IMPORT' => 's 14',
    'FROM' => 's 25',
    'DEF' => 's 36',
    '\'funcdef\'25' => 's 201',
    'testlist' => 's 203',
    'if_stmt' => 's 232',
    'while_stmt' => 's 233',
    'funcdef' => 's 234',
    'classdef' => 's 235',
    'if_stmt_simple' => 's 236',
    'if_stmt_with_else' => 's 237',
    'IF' => 's 238',
    '\'if_stmt_simple\'76' => 's 241',
    '\'if_stmt_with_else\'78' => 's 243',
    '\'if_stmt_with_else\'79' => 's 247',
    'WHILE' => 's 249',
    'PRINT' => 's 223',
    'return_stmt' => 's 225',
    'RETURN' => 's 226',
    'DEDENT' => 's 256',
    'test' => 's 207',
    'or_test' => 's 57',
    'lambdef' => 's 62',
    'and_test' => 's 63',
    'not_test' => 's 66',
    'NOT' => 's 69',
    'comparison' => 's 71',
    'expr' => 's 72',
    'xor_expr' => 's 75',
    'and_expr' => 's 78',
    'shift_expr' => 's 81',
    'arith_expr' => 's 84',
    'term' => 's 87',
    'factor' => 's 90',
    'PLUS' => 's 93',
    'MINUS' => 's 95',
    'TILDE' => 's 97',
    'power' => 's 99',
    'atom' => 's 100',
    'SBO' => 's 104',
    'BO' => 's 111',
    'NAME' => 's 114',
    'NUMBER' => 's 115',
    'STRING' => 's 116',
    'TRIPLEDOT' => 's 117',
    'NONE' => 's 118',
    'TRUE' => 's 119',
    'FALSE' => 's 120',
    'CLASS' => 's 257',
    '\'classdef\'173' => 's 268',
  ),
  232 => 
  array (
    'ENDMARKER' => 'r 70',
    'DEF' => 'r 70',
    'WHILE' => 'r 70',
    'CLASS' => 'r 70',
    'PRINT' => 'r 70',
    'IF' => 'r 70',
    'RETURN' => 'r 70',
    'IMPORT' => 'r 70',
    'FROM' => 'r 70',
    'lambdef' => 'r 70',
    'NOT' => 'r 70',
    'PLUS' => 'r 70',
    'MINUS' => 'r 70',
    'TILDE' => 'r 70',
    'SBO' => 'r 70',
    'BO' => 'r 70',
    'NAME' => 'r 70',
    'NUMBER' => 'r 70',
    'STRING' => 'r 70',
    'TRIPLEDOT' => 'r 70',
    'NONE' => 'r 70',
    'TRUE' => 'r 70',
    'FALSE' => 'r 70',
    'DEDENT' => 'r 70',
  ),
  233 => 
  array (
    'ENDMARKER' => 'r 71',
    'DEF' => 'r 71',
    'WHILE' => 'r 71',
    'CLASS' => 'r 71',
    'PRINT' => 'r 71',
    'IF' => 'r 71',
    'RETURN' => 'r 71',
    'IMPORT' => 'r 71',
    'FROM' => 'r 71',
    'lambdef' => 'r 71',
    'NOT' => 'r 71',
    'PLUS' => 'r 71',
    'MINUS' => 'r 71',
    'TILDE' => 'r 71',
    'SBO' => 'r 71',
    'BO' => 'r 71',
    'NAME' => 'r 71',
    'NUMBER' => 'r 71',
    'STRING' => 'r 71',
    'TRIPLEDOT' => 'r 71',
    'NONE' => 'r 71',
    'TRUE' => 'r 71',
    'FALSE' => 'r 71',
    'DEDENT' => 'r 71',
  ),
  234 => 
  array (
    'ENDMARKER' => 'r 72',
    'DEF' => 'r 72',
    'WHILE' => 'r 72',
    'CLASS' => 'r 72',
    'PRINT' => 'r 72',
    'IF' => 'r 72',
    'RETURN' => 'r 72',
    'IMPORT' => 'r 72',
    'FROM' => 'r 72',
    'lambdef' => 'r 72',
    'NOT' => 'r 72',
    'PLUS' => 'r 72',
    'MINUS' => 'r 72',
    'TILDE' => 'r 72',
    'SBO' => 'r 72',
    'BO' => 'r 72',
    'NAME' => 'r 72',
    'NUMBER' => 'r 72',
    'STRING' => 'r 72',
    'TRIPLEDOT' => 'r 72',
    'NONE' => 'r 72',
    'TRUE' => 'r 72',
    'FALSE' => 'r 72',
    'DEDENT' => 'r 72',
  ),
  235 => 
  array (
    'ENDMARKER' => 'r 73',
    'DEF' => 'r 73',
    'WHILE' => 'r 73',
    'CLASS' => 'r 73',
    'PRINT' => 'r 73',
    'IF' => 'r 73',
    'RETURN' => 'r 73',
    'IMPORT' => 'r 73',
    'FROM' => 'r 73',
    'lambdef' => 'r 73',
    'NOT' => 'r 73',
    'PLUS' => 'r 73',
    'MINUS' => 'r 73',
    'TILDE' => 'r 73',
    'SBO' => 'r 73',
    'BO' => 'r 73',
    'NAME' => 'r 73',
    'NUMBER' => 'r 73',
    'STRING' => 'r 73',
    'TRIPLEDOT' => 'r 73',
    'NONE' => 'r 73',
    'TRUE' => 'r 73',
    'FALSE' => 'r 73',
    'DEDENT' => 'r 73',
  ),
  236 => 
  array (
    'ENDMARKER' => 'r 74',
    'DEF' => 'r 74',
    'WHILE' => 'r 74',
    'CLASS' => 'r 74',
    'PRINT' => 'r 74',
    'IF' => 'r 74',
    'RETURN' => 'r 74',
    'IMPORT' => 'r 74',
    'FROM' => 'r 74',
    'lambdef' => 'r 74',
    'NOT' => 'r 74',
    'PLUS' => 'r 74',
    'MINUS' => 'r 74',
    'TILDE' => 'r 74',
    'SBO' => 'r 74',
    'BO' => 'r 74',
    'NAME' => 'r 74',
    'NUMBER' => 'r 74',
    'STRING' => 'r 74',
    'TRIPLEDOT' => 'r 74',
    'NONE' => 'r 74',
    'TRUE' => 'r 74',
    'FALSE' => 'r 74',
    'DEDENT' => 'r 74',
  ),
  237 => 
  array (
    'ENDMARKER' => 'r 75',
    'DEF' => 'r 75',
    'WHILE' => 'r 75',
    'CLASS' => 'r 75',
    'PRINT' => 'r 75',
    'IF' => 'r 75',
    'RETURN' => 'r 75',
    'IMPORT' => 'r 75',
    'FROM' => 'r 75',
    'lambdef' => 'r 75',
    'NOT' => 'r 75',
    'PLUS' => 'r 75',
    'MINUS' => 'r 75',
    'TILDE' => 'r 75',
    'SBO' => 'r 75',
    'BO' => 'r 75',
    'NAME' => 'r 75',
    'NUMBER' => 'r 75',
    'STRING' => 'r 75',
    'TRIPLEDOT' => 'r 75',
    'NONE' => 'r 75',
    'TRUE' => 'r 75',
    'FALSE' => 'r 75',
    'DEDENT' => 'r 75',
  ),
  238 => 
  array (
    'test' => 's 239',
    'or_test' => 's 57',
    'lambdef' => 's 62',
    'and_test' => 's 63',
    'not_test' => 's 66',
    'NOT' => 's 69',
    'comparison' => 's 71',
    'expr' => 's 72',
    'xor_expr' => 's 75',
    'and_expr' => 's 78',
    'shift_expr' => 's 81',
    'arith_expr' => 's 84',
    'term' => 's 87',
    'factor' => 's 90',
    'PLUS' => 's 93',
    'MINUS' => 's 95',
    'TILDE' => 's 97',
    'power' => 's 99',
    'atom' => 's 100',
    'SBO' => 's 104',
    'BO' => 's 111',
    'NAME' => 's 114',
    'NUMBER' => 's 115',
    'STRING' => 's 116',
    'TRIPLEDOT' => 's 117',
    'NONE' => 's 118',
    'TRUE' => 's 119',
    'FALSE' => 's 120',
  ),
  239 => 
  array (
    'COLON' => 's 240',
  ),
  240 => 
  array (
    'NEWLINE' => 'r 76',
    'PRINT' => 'r 76',
    'RETURN' => 'r 76',
    'IMPORT' => 'r 76',
    'FROM' => 'r 76',
    'lambdef' => 'r 76',
    'NOT' => 'r 76',
    'PLUS' => 'r 76',
    'MINUS' => 'r 76',
    'TILDE' => 'r 76',
    'SBO' => 'r 76',
    'BO' => 'r 76',
    'NAME' => 'r 76',
    'NUMBER' => 'r 76',
    'STRING' => 'r 76',
    'TRIPLEDOT' => 'r 76',
    'NONE' => 'r 76',
    'TRUE' => 'r 76',
    'FALSE' => 'r 76',
  ),
  241 => 
  array (
    'small_stmt' => 's 6',
    'expr_stmt' => 's 8',
    'print_stmt' => 's 9',
    'flow_stmt' => 's 10',
    'import_stmt' => 's 11',
    'import_name' => 's 12',
    'import_from' => 's 13',
    'IMPORT' => 's 14',
    'FROM' => 's 25',
    'testlist' => 's 203',
    'suite' => 's 242',
    'PRINT' => 's 223',
    'return_stmt' => 's 225',
    'RETURN' => 's 226',
    'simple_stmt' => 's 228',
    'NEWLINE' => 's 229',
    'test' => 's 207',
    'or_test' => 's 57',
    'lambdef' => 's 62',
    'and_test' => 's 63',
    'not_test' => 's 66',
    'NOT' => 's 69',
    'comparison' => 's 71',
    'expr' => 's 72',
    'xor_expr' => 's 75',
    'and_expr' => 's 78',
    'shift_expr' => 's 81',
    'arith_expr' => 's 84',
    'term' => 's 87',
    'factor' => 's 90',
    'PLUS' => 's 93',
    'MINUS' => 's 95',
    'TILDE' => 's 97',
    'power' => 's 99',
    'atom' => 's 100',
    'SBO' => 's 104',
    'BO' => 's 111',
    'NAME' => 's 114',
    'NUMBER' => 's 115',
    'STRING' => 's 116',
    'TRIPLEDOT' => 's 117',
    'NONE' => 's 118',
    'TRUE' => 's 119',
    'FALSE' => 's 120',
  ),
  242 => 
  array (
    'ENDMARKER' => 'r 77',
    'DEF' => 'r 77',
    'WHILE' => 'r 77',
    'CLASS' => 'r 77',
    'PRINT' => 'r 77',
    'IF' => 'r 77',
    'RETURN' => 'r 77',
    'IMPORT' => 'r 77',
    'FROM' => 'r 77',
    'lambdef' => 'r 77',
    'NOT' => 'r 77',
    'PLUS' => 'r 77',
    'MINUS' => 'r 77',
    'TILDE' => 'r 77',
    'SBO' => 'r 77',
    'BO' => 'r 77',
    'NAME' => 'r 77',
    'NUMBER' => 'r 77',
    'STRING' => 'r 77',
    'TRIPLEDOT' => 'r 77',
    'NONE' => 'r 77',
    'TRUE' => 'r 77',
    'FALSE' => 'r 77',
    'DEDENT' => 'r 77',
  ),
  243 => 
  array (
    'small_stmt' => 's 6',
    'expr_stmt' => 's 8',
    'print_stmt' => 's 9',
    'flow_stmt' => 's 10',
    'import_stmt' => 's 11',
    'import_name' => 's 12',
    'import_from' => 's 13',
    'IMPORT' => 's 14',
    'FROM' => 's 25',
    'testlist' => 's 203',
    'suite' => 's 244',
    'PRINT' => 's 223',
    'return_stmt' => 's 225',
    'RETURN' => 's 226',
    'simple_stmt' => 's 228',
    'NEWLINE' => 's 229',
    'test' => 's 207',
    'or_test' => 's 57',
    'lambdef' => 's 62',
    'and_test' => 's 63',
    'not_test' => 's 66',
    'NOT' => 's 69',
    'comparison' => 's 71',
    'expr' => 's 72',
    'xor_expr' => 's 75',
    'and_expr' => 's 78',
    'shift_expr' => 's 81',
    'arith_expr' => 's 84',
    'term' => 's 87',
    'factor' => 's 90',
    'PLUS' => 's 93',
    'MINUS' => 's 95',
    'TILDE' => 's 97',
    'power' => 's 99',
    'atom' => 's 100',
    'SBO' => 's 104',
    'BO' => 's 111',
    'NAME' => 's 114',
    'NUMBER' => 's 115',
    'STRING' => 's 116',
    'TRIPLEDOT' => 's 117',
    'NONE' => 's 118',
    'TRUE' => 's 119',
    'FALSE' => 's 120',
  ),
  244 => 
  array (
    'ELSE' => 's 245',
  ),
  245 => 
  array (
    'COLON' => 's 246',
  ),
  246 => 
  array (
    'NEWLINE' => 'r 79',
    'PRINT' => 'r 79',
    'RETURN' => 'r 79',
    'IMPORT' => 'r 79',
    'FROM' => 'r 79',
    'lambdef' => 'r 79',
    'NOT' => 'r 79',
    'PLUS' => 'r 79',
    'MINUS' => 'r 79',
    'TILDE' => 'r 79',
    'SBO' => 'r 79',
    'BO' => 'r 79',
    'NAME' => 'r 79',
    'NUMBER' => 'r 79',
    'STRING' => 'r 79',
    'TRIPLEDOT' => 'r 79',
    'NONE' => 'r 79',
    'TRUE' => 'r 79',
    'FALSE' => 'r 79',
  ),
  247 => 
  array (
    'small_stmt' => 's 6',
    'expr_stmt' => 's 8',
    'print_stmt' => 's 9',
    'flow_stmt' => 's 10',
    'import_stmt' => 's 11',
    'import_name' => 's 12',
    'import_from' => 's 13',
    'IMPORT' => 's 14',
    'FROM' => 's 25',
    'testlist' => 's 203',
    'suite' => 's 248',
    'PRINT' => 's 223',
    'return_stmt' => 's 225',
    'RETURN' => 's 226',
    'simple_stmt' => 's 228',
    'NEWLINE' => 's 229',
    'test' => 's 207',
    'or_test' => 's 57',
    'lambdef' => 's 62',
    'and_test' => 's 63',
    'not_test' => 's 66',
    'NOT' => 's 69',
    'comparison' => 's 71',
    'expr' => 's 72',
    'xor_expr' => 's 75',
    'and_expr' => 's 78',
    'shift_expr' => 's 81',
    'arith_expr' => 's 84',
    'term' => 's 87',
    'factor' => 's 90',
    'PLUS' => 's 93',
    'MINUS' => 's 95',
    'TILDE' => 's 97',
    'power' => 's 99',
    'atom' => 's 100',
    'SBO' => 's 104',
    'BO' => 's 111',
    'NAME' => 's 114',
    'NUMBER' => 's 115',
    'STRING' => 's 116',
    'TRIPLEDOT' => 's 117',
    'NONE' => 's 118',
    'TRUE' => 's 119',
    'FALSE' => 's 120',
  ),
  248 => 
  array (
    'ENDMARKER' => 'r 80',
    'DEF' => 'r 80',
    'WHILE' => 'r 80',
    'CLASS' => 'r 80',
    'PRINT' => 'r 80',
    'IF' => 'r 80',
    'RETURN' => 'r 80',
    'IMPORT' => 'r 80',
    'FROM' => 'r 80',
    'lambdef' => 'r 80',
    'NOT' => 'r 80',
    'PLUS' => 'r 80',
    'MINUS' => 'r 80',
    'TILDE' => 'r 80',
    'SBO' => 'r 80',
    'BO' => 'r 80',
    'NAME' => 'r 80',
    'NUMBER' => 'r 80',
    'STRING' => 'r 80',
    'TRIPLEDOT' => 'r 80',
    'NONE' => 'r 80',
    'TRUE' => 'r 80',
    'FALSE' => 'r 80',
    'DEDENT' => 'r 80',
  ),
  249 => 
  array (
    'test' => 's 250',
    'or_test' => 's 57',
    'lambdef' => 's 62',
    'and_test' => 's 63',
    'not_test' => 's 66',
    'NOT' => 's 69',
    'comparison' => 's 71',
    'expr' => 's 72',
    'xor_expr' => 's 75',
    'and_expr' => 's 78',
    'shift_expr' => 's 81',
    'arith_expr' => 's 84',
    'term' => 's 87',
    'factor' => 's 90',
    'PLUS' => 's 93',
    'MINUS' => 's 95',
    'TILDE' => 's 97',
    'power' => 's 99',
    'atom' => 's 100',
    'SBO' => 's 104',
    'BO' => 's 111',
    'NAME' => 's 114',
    'NUMBER' => 's 115',
    'STRING' => 's 116',
    'TRIPLEDOT' => 's 117',
    'NONE' => 's 118',
    'TRUE' => 's 119',
    'FALSE' => 's 120',
  ),
  250 => 
  array (
    'COLON' => 's 251',
  ),
  251 => 
  array (
    'small_stmt' => 's 6',
    'expr_stmt' => 's 8',
    'print_stmt' => 's 9',
    'flow_stmt' => 's 10',
    'import_stmt' => 's 11',
    'import_name' => 's 12',
    'import_from' => 's 13',
    'IMPORT' => 's 14',
    'FROM' => 's 25',
    'testlist' => 's 203',
    'suite' => 's 252',
    'PRINT' => 's 223',
    'return_stmt' => 's 225',
    'RETURN' => 's 226',
    'simple_stmt' => 's 228',
    'NEWLINE' => 's 229',
    'test' => 's 207',
    'or_test' => 's 57',
    'lambdef' => 's 62',
    'and_test' => 's 63',
    'not_test' => 's 66',
    'NOT' => 's 69',
    'comparison' => 's 71',
    'expr' => 's 72',
    'xor_expr' => 's 75',
    'and_expr' => 's 78',
    'shift_expr' => 's 81',
    'arith_expr' => 's 84',
    'term' => 's 87',
    'factor' => 's 90',
    'PLUS' => 's 93',
    'MINUS' => 's 95',
    'TILDE' => 's 97',
    'power' => 's 99',
    'atom' => 's 100',
    'SBO' => 's 104',
    'BO' => 's 111',
    'NAME' => 's 114',
    'NUMBER' => 's 115',
    'STRING' => 's 116',
    'TRIPLEDOT' => 's 117',
    'NONE' => 's 118',
    'TRUE' => 's 119',
    'FALSE' => 's 120',
  ),
  252 => 
  array (
    'ELSE' => 's 253',
    'ENDMARKER' => 'r 81',
    'DEF' => 'r 81',
    'WHILE' => 'r 81',
    'CLASS' => 'r 81',
    'PRINT' => 'r 81',
    'IF' => 'r 81',
    'RETURN' => 'r 81',
    'IMPORT' => 'r 81',
    'FROM' => 'r 81',
    'lambdef' => 'r 81',
    'NOT' => 'r 81',
    'PLUS' => 'r 81',
    'MINUS' => 'r 81',
    'TILDE' => 'r 81',
    'SBO' => 'r 81',
    'BO' => 'r 81',
    'NAME' => 'r 81',
    'NUMBER' => 'r 81',
    'STRING' => 'r 81',
    'TRIPLEDOT' => 'r 81',
    'NONE' => 'r 81',
    'TRUE' => 'r 81',
    'FALSE' => 'r 81',
    'DEDENT' => 'r 81',
  ),
  253 => 
  array (
    'COLON' => 's 254',
  ),
  254 => 
  array (
    'small_stmt' => 's 6',
    'expr_stmt' => 's 8',
    'print_stmt' => 's 9',
    'flow_stmt' => 's 10',
    'import_stmt' => 's 11',
    'import_name' => 's 12',
    'import_from' => 's 13',
    'IMPORT' => 's 14',
    'FROM' => 's 25',
    'testlist' => 's 203',
    'suite' => 's 255',
    'PRINT' => 's 223',
    'return_stmt' => 's 225',
    'RETURN' => 's 226',
    'simple_stmt' => 's 228',
    'NEWLINE' => 's 229',
    'test' => 's 207',
    'or_test' => 's 57',
    'lambdef' => 's 62',
    'and_test' => 's 63',
    'not_test' => 's 66',
    'NOT' => 's 69',
    'comparison' => 's 71',
    'expr' => 's 72',
    'xor_expr' => 's 75',
    'and_expr' => 's 78',
    'shift_expr' => 's 81',
    'arith_expr' => 's 84',
    'term' => 's 87',
    'factor' => 's 90',
    'PLUS' => 's 93',
    'MINUS' => 's 95',
    'TILDE' => 's 97',
    'power' => 's 99',
    'atom' => 's 100',
    'SBO' => 's 104',
    'BO' => 's 111',
    'NAME' => 's 114',
    'NUMBER' => 's 115',
    'STRING' => 's 116',
    'TRIPLEDOT' => 's 117',
    'NONE' => 's 118',
    'TRUE' => 's 119',
    'FALSE' => 's 120',
  ),
  255 => 
  array (
    'ENDMARKER' => 'r 82',
    'DEF' => 'r 82',
    'WHILE' => 'r 82',
    'CLASS' => 'r 82',
    'PRINT' => 'r 82',
    'IF' => 'r 82',
    'RETURN' => 'r 82',
    'IMPORT' => 'r 82',
    'FROM' => 'r 82',
    'lambdef' => 'r 82',
    'NOT' => 'r 82',
    'PLUS' => 'r 82',
    'MINUS' => 'r 82',
    'TILDE' => 'r 82',
    'SBO' => 'r 82',
    'BO' => 'r 82',
    'NAME' => 'r 82',
    'NUMBER' => 'r 82',
    'STRING' => 'r 82',
    'TRIPLEDOT' => 'r 82',
    'NONE' => 'r 82',
    'TRUE' => 'r 82',
    'FALSE' => 'r 82',
    'DEDENT' => 'r 82',
  ),
  256 => 
  array (
    'ENDMARKER' => 'r 88',
    'DEF' => 'r 88',
    'WHILE' => 'r 88',
    'CLASS' => 'r 88',
    'PRINT' => 'r 88',
    'IF' => 'r 88',
    'RETURN' => 'r 88',
    'IMPORT' => 'r 88',
    'FROM' => 'r 88',
    'lambdef' => 'r 88',
    'NOT' => 'r 88',
    'PLUS' => 'r 88',
    'MINUS' => 'r 88',
    'TILDE' => 'r 88',
    'SBO' => 'r 88',
    'BO' => 'r 88',
    'NAME' => 'r 88',
    'NUMBER' => 'r 88',
    'STRING' => 'r 88',
    'TRIPLEDOT' => 'r 88',
    'NONE' => 'r 88',
    'TRUE' => 'r 88',
    'FALSE' => 'r 88',
    'DEDENT' => 'r 88',
    'ELSE' => 'r 88',
  ),
  257 => 
  array (
    'NAME' => 's 258',
  ),
  258 => 
  array (
    'RBO' => 's 259',
    'COLON' => 's 267',
  ),
  259 => 
  array (
    'test' => 's 207',
    'or_test' => 's 57',
    'lambdef' => 's 62',
    'and_test' => 's 63',
    'not_test' => 's 66',
    'NOT' => 's 69',
    'comparison' => 's 71',
    'expr' => 's 72',
    'xor_expr' => 's 75',
    'and_expr' => 's 78',
    'shift_expr' => 's 81',
    'arith_expr' => 's 84',
    'term' => 's 87',
    'factor' => 's 90',
    'PLUS' => 's 93',
    'MINUS' => 's 95',
    'TILDE' => 's 97',
    'power' => 's 99',
    'atom' => 's 100',
    'SBO' => 's 104',
    'BO' => 's 111',
    'NAME' => 's 114',
    'NUMBER' => 's 115',
    'STRING' => 's 116',
    'TRIPLEDOT' => 's 117',
    'NONE' => 's 118',
    'TRUE' => 's 119',
    'FALSE' => 's 120',
    'testlist' => 's 260',
    'RBC' => 's 264',
  ),
  260 => 
  array (
    'RBC' => 's 261',
  ),
  261 => 
  array (
    'COLON' => 's 262',
  ),
  262 => 
  array (
    'small_stmt' => 's 6',
    'expr_stmt' => 's 8',
    'print_stmt' => 's 9',
    'flow_stmt' => 's 10',
    'import_stmt' => 's 11',
    'import_name' => 's 12',
    'import_from' => 's 13',
    'IMPORT' => 's 14',
    'FROM' => 's 25',
    'testlist' => 's 203',
    'PRINT' => 's 223',
    'return_stmt' => 's 225',
    'RETURN' => 's 226',
    'simple_stmt' => 's 228',
    'NEWLINE' => 's 229',
    'test' => 's 207',
    'or_test' => 's 57',
    'lambdef' => 's 62',
    'and_test' => 's 63',
    'not_test' => 's 66',
    'NOT' => 's 69',
    'comparison' => 's 71',
    'expr' => 's 72',
    'xor_expr' => 's 75',
    'and_expr' => 's 78',
    'shift_expr' => 's 81',
    'arith_expr' => 's 84',
    'term' => 's 87',
    'factor' => 's 90',
    'PLUS' => 's 93',
    'MINUS' => 's 95',
    'TILDE' => 's 97',
    'power' => 's 99',
    'atom' => 's 100',
    'SBO' => 's 104',
    'BO' => 's 111',
    'NAME' => 's 114',
    'NUMBER' => 's 115',
    'STRING' => 's 116',
    'TRIPLEDOT' => 's 117',
    'NONE' => 's 118',
    'TRUE' => 's 119',
    'FALSE' => 's 120',
    'suite' => 's 263',
  ),
  263 => 
  array (
    'ENDMARKER' => 'r 171',
    'DEF' => 'r 171',
    'WHILE' => 'r 171',
    'CLASS' => 'r 171',
    'PRINT' => 'r 171',
    'IF' => 'r 171',
    'RETURN' => 'r 171',
    'IMPORT' => 'r 171',
    'FROM' => 'r 171',
    'lambdef' => 'r 171',
    'NOT' => 'r 171',
    'PLUS' => 'r 171',
    'MINUS' => 'r 171',
    'TILDE' => 'r 171',
    'SBO' => 'r 171',
    'BO' => 'r 171',
    'NAME' => 'r 171',
    'NUMBER' => 'r 171',
    'STRING' => 'r 171',
    'TRIPLEDOT' => 'r 171',
    'NONE' => 'r 171',
    'TRUE' => 'r 171',
    'FALSE' => 'r 171',
    'DEDENT' => 'r 171',
  ),
  264 => 
  array (
    'COLON' => 's 265',
  ),
  265 => 
  array (
    'small_stmt' => 's 6',
    'expr_stmt' => 's 8',
    'print_stmt' => 's 9',
    'flow_stmt' => 's 10',
    'import_stmt' => 's 11',
    'import_name' => 's 12',
    'import_from' => 's 13',
    'IMPORT' => 's 14',
    'FROM' => 's 25',
    'testlist' => 's 203',
    'PRINT' => 's 223',
    'return_stmt' => 's 225',
    'RETURN' => 's 226',
    'simple_stmt' => 's 228',
    'NEWLINE' => 's 229',
    'test' => 's 207',
    'or_test' => 's 57',
    'lambdef' => 's 62',
    'and_test' => 's 63',
    'not_test' => 's 66',
    'NOT' => 's 69',
    'comparison' => 's 71',
    'expr' => 's 72',
    'xor_expr' => 's 75',
    'and_expr' => 's 78',
    'shift_expr' => 's 81',
    'arith_expr' => 's 84',
    'term' => 's 87',
    'factor' => 's 90',
    'PLUS' => 's 93',
    'MINUS' => 's 95',
    'TILDE' => 's 97',
    'power' => 's 99',
    'atom' => 's 100',
    'SBO' => 's 104',
    'BO' => 's 111',
    'NAME' => 's 114',
    'NUMBER' => 's 115',
    'STRING' => 's 116',
    'TRIPLEDOT' => 's 117',
    'NONE' => 's 118',
    'TRUE' => 's 119',
    'FALSE' => 's 120',
    'suite' => 's 266',
  ),
  266 => 
  array (
    'ENDMARKER' => 'r 172',
    'DEF' => 'r 172',
    'WHILE' => 'r 172',
    'CLASS' => 'r 172',
    'PRINT' => 'r 172',
    'IF' => 'r 172',
    'RETURN' => 'r 172',
    'IMPORT' => 'r 172',
    'FROM' => 'r 172',
    'lambdef' => 'r 172',
    'NOT' => 'r 172',
    'PLUS' => 'r 172',
    'MINUS' => 'r 172',
    'TILDE' => 'r 172',
    'SBO' => 'r 172',
    'BO' => 'r 172',
    'NAME' => 'r 172',
    'NUMBER' => 'r 172',
    'STRING' => 'r 172',
    'TRIPLEDOT' => 'r 172',
    'NONE' => 'r 172',
    'TRUE' => 'r 172',
    'FALSE' => 'r 172',
    'DEDENT' => 'r 172',
  ),
  267 => 
  array (
    'NEWLINE' => 'r 173',
    'PRINT' => 'r 173',
    'RETURN' => 'r 173',
    'IMPORT' => 'r 173',
    'FROM' => 'r 173',
    'lambdef' => 'r 173',
    'NOT' => 'r 173',
    'PLUS' => 'r 173',
    'MINUS' => 'r 173',
    'TILDE' => 'r 173',
    'SBO' => 'r 173',
    'BO' => 'r 173',
    'NAME' => 'r 173',
    'NUMBER' => 'r 173',
    'STRING' => 'r 173',
    'TRIPLEDOT' => 'r 173',
    'NONE' => 'r 173',
    'TRUE' => 'r 173',
    'FALSE' => 'r 173',
  ),
  268 => 
  array (
    'small_stmt' => 's 6',
    'expr_stmt' => 's 8',
    'print_stmt' => 's 9',
    'flow_stmt' => 's 10',
    'import_stmt' => 's 11',
    'import_name' => 's 12',
    'import_from' => 's 13',
    'IMPORT' => 's 14',
    'FROM' => 's 25',
    'testlist' => 's 203',
    'PRINT' => 's 223',
    'return_stmt' => 's 225',
    'RETURN' => 's 226',
    'simple_stmt' => 's 228',
    'NEWLINE' => 's 229',
    'test' => 's 207',
    'or_test' => 's 57',
    'lambdef' => 's 62',
    'and_test' => 's 63',
    'not_test' => 's 66',
    'NOT' => 's 69',
    'comparison' => 's 71',
    'expr' => 's 72',
    'xor_expr' => 's 75',
    'and_expr' => 's 78',
    'shift_expr' => 's 81',
    'arith_expr' => 's 84',
    'term' => 's 87',
    'factor' => 's 90',
    'PLUS' => 's 93',
    'MINUS' => 's 95',
    'TILDE' => 's 97',
    'power' => 's 99',
    'atom' => 's 100',
    'SBO' => 's 104',
    'BO' => 's 111',
    'NAME' => 's 114',
    'NUMBER' => 's 115',
    'STRING' => 's 116',
    'TRIPLEDOT' => 's 117',
    'NONE' => 's 118',
    'TRUE' => 's 119',
    'FALSE' => 's 120',
    'suite' => 's 269',
  ),
  269 => 
  array (
    'ENDMARKER' => 'r 174',
    'DEF' => 'r 174',
    'WHILE' => 'r 174',
    'CLASS' => 'r 174',
    'PRINT' => 'r 174',
    'IF' => 'r 174',
    'RETURN' => 'r 174',
    'IMPORT' => 'r 174',
    'FROM' => 'r 174',
    'lambdef' => 'r 174',
    'NOT' => 'r 174',
    'PLUS' => 'r 174',
    'MINUS' => 'r 174',
    'TILDE' => 'r 174',
    'SBO' => 'r 174',
    'BO' => 'r 174',
    'NAME' => 'r 174',
    'NUMBER' => 'r 174',
    'STRING' => 'r 174',
    'TRIPLEDOT' => 'r 174',
    'NONE' => 'r 174',
    'TRUE' => 'r 174',
    'FALSE' => 'r 174',
    'DEDENT' => 'r 174',
  ),
  270 => 
  array (
    'ENDMARKER' => 'r 2',
    'DEF' => 'r 2',
    'WHILE' => 'r 2',
    'CLASS' => 'r 2',
    'PRINT' => 'r 2',
    'IF' => 'r 2',
    'RETURN' => 'r 2',
    'IMPORT' => 'r 2',
    'FROM' => 'r 2',
    'lambdef' => 'r 2',
    'NOT' => 'r 2',
    'PLUS' => 'r 2',
    'MINUS' => 'r 2',
    'TILDE' => 'r 2',
    'SBO' => 'r 2',
    'BO' => 'r 2',
    'NAME' => 'r 2',
    'NUMBER' => 'r 2',
    'STRING' => 'r 2',
    'TRIPLEDOT' => 'r 2',
    'NONE' => 'r 2',
    'TRUE' => 'r 2',
    'FALSE' => 'r 2',
    'DEDENT' => 'r 2',
  ),
  271 => 
  array (
    '#' => 'r 175',
  ),
);
function reduce_0_stmt_start_1($tokens, &$result) {
#
# (0) stmt_start :=  stmt_loads  ENDMARKER
#
$result = reset($tokens);

}

function reduce_1_stmt_loads_1($tokens, &$result) {
#
# (1) stmt_loads :=  stmt_loads  stmt_block
#
$result = reset($tokens);

}

function reduce_2_stmt_loads_2($tokens, &$result) {
#
# (2) stmt_loads :=  stmt_block
#
$result = reset($tokens);

}

function reduce_3_stmt_block_1($tokens, &$result) {
#
# (3) stmt_block :=  simple_stmt
#
$result = reset($tokens);

}

function reduce_4_stmt_block_2($tokens, &$result) {
#
# (4) stmt_block :=  compound_stmt
#
$result = reset($tokens);

}

function reduce_5_simple_stmt_1($tokens, &$result) {
#
# (5) simple_stmt :=  small_stmt  NEWLINE
#
$result = reset($tokens);

}

function reduce_6_small_stmt_1($tokens, &$result) {
#
# (6) small_stmt :=  expr_stmt
#
$result = reset($tokens);

}

function reduce_7_small_stmt_2($tokens, &$result) {
#
# (7) small_stmt :=  print_stmt
#
$result = reset($tokens);

}

function reduce_8_small_stmt_3($tokens, &$result) {
#
# (8) small_stmt :=  flow_stmt
#
$result = reset($tokens);

}

function reduce_9_small_stmt_4($tokens, &$result) {
#
# (9) small_stmt :=  import_stmt
#
$result = reset($tokens);

}

function reduce_10_import_stmt_1($tokens, &$result) {
#
# (10) import_stmt :=  import_name
#
$result = reset($tokens);

}

function reduce_11_import_stmt_2($tokens, &$result) {
#
# (11) import_stmt :=  import_from
#
$result = reset($tokens);

}

function reduce_12_import_name_1($tokens, &$result) {
#
# (12) import_name :=  IMPORT  dotted_as_names
#
$result = reset($tokens);
 static::python_import($tokens[1]); 
}

function reduce_13_import_from_1($tokens, &$result) {
#
# (13) import_from :=  FROM  dotted_name  IMPORT  STAR
#
$result = reset($tokens);

}

function reduce_14_import_from_2($tokens, &$result) {
#
# (14) import_from :=  FROM  dotted_name  IMPORT  import_as_names
#
$result = reset($tokens);

}

function reduce_15_import_as_name_1($tokens, &$result) {
#
# (15) import_as_name :=  NAME
#
$result = reset($tokens);

}

function reduce_16_import_as_name_2($tokens, &$result) {
#
# (16) import_as_name :=  NAME  AS  NAME
#
$result = reset($tokens);

}

function reduce_17_dotted_as_name_1($tokens, &$result) {
#
# (17) dotted_as_name :=  dotted_name
#
$result = reset($tokens);

}

function reduce_18_dotted_as_name_2($tokens, &$result) {
#
# (18) dotted_as_name :=  dotted_name  AS  NAME
#
$result = reset($tokens);

}

function reduce_19_import_as_names_1($tokens, &$result) {
#
# (19) import_as_names :=  import_as_name
#
$result = reset($tokens);

}

function reduce_20_import_as_names_2($tokens, &$result) {
#
# (20) import_as_names :=  import_as_name  COLON  import_as_names
#
$result = reset($tokens);

}

function reduce_21_dotted_as_names_1($tokens, &$result) {
#
# (21) dotted_as_names :=  dotted_as_name
#
$result = reset($tokens);

}

function reduce_22_dotted_as_names_2($tokens, &$result) {
#
# (22) dotted_as_names :=  dotted_as_name  COLON  dotted_as_names
#
$result = reset($tokens);

}

function reduce_23_dotted_name_1($tokens, &$result) {
#
# (23) dotted_name :=  NAME
#
$result = reset($tokens);

}

function reduce_24_dotted_name_2($tokens, &$result) {
#
# (24) dotted_name :=  NAME  DOT  dotted_name
#
$result = reset($tokens);

}

function reduce_25_funcdef25_1($tokens, &$result) {
#
# (25) 'funcdef'25 :=  DEF  NAME  parameters  COLON
#
$result = reset($tokens);
 lang_python_stmt::def_begin($tokens[1],$tokens[2]); 
}

function reduce_26_funcdef_1($tokens, &$result) {
#
# (26) funcdef :=  'funcdef'25  suite
#
$result = reset($tokens);
 lang_python_stmt::def_end(); 
}

function reduce_27_parameters_1($tokens, &$result) {
#
# (27) parameters :=  RBO  varargslist  RBC
#
$result = reset($tokens);
 $result = $tokens[1]; 
}

function reduce_28_parameters_2($tokens, &$result) {
#
# (28) parameters :=  RBO  RBC
#
$result = reset($tokens);
 $result = null; 
}

function reduce_29_varargslist_1($tokens, &$result) {
#
# (29) varargslist :=  fpdef_rc_star  STAR  NAME  COMMA  DSTAR  NAME
#
$result = reset($tokens);

}

function reduce_30_varargslist_2($tokens, &$result) {
#
# (30) varargslist :=  fpdef_rc_star  STAR  NAME
#
$result = reset($tokens);

}

function reduce_31_varargslist_3($tokens, &$result) {
#
# (31) varargslist :=  fpdef_rc_star  DSTAR  NAME
#
$result = reset($tokens);

}

function reduce_32_varargslist_4($tokens, &$result) {
#
# (32) varargslist :=  fpdef  EQUAL  test  fpdef_lc_star  COMMA
#
$result = reset($tokens);

}

function reduce_33_varargslist_5($tokens, &$result) {
#
# (33) varargslist :=  fpdef  fpdef_lc_star  COMMA
#
$result = reset($tokens);

}

function reduce_34_varargslist_6($tokens, &$result) {
#
# (34) varargslist :=  fpdef  EQUAL  test  fpdef_lc_star
#
$result = reset($tokens);

}

function reduce_35_varargslist_7($tokens, &$result) {
#
# (35) varargslist :=  fpdef  fpdef_lc_star
#
$result = reset($tokens);

}

function reduce_36_fpdef_rc_star_1($tokens, &$result) {
#
# (36) fpdef_rc_star :=  fpdef_rc_star  fpdef_rc
#
$result = reset($tokens);

}

function reduce_37_fpdef_rc_star_2($tokens, &$result) {
#
# (37) fpdef_rc_star :=  fpdef_rc
#
$result = reset($tokens);

}

function reduce_38_fpdef_rc_star_3($tokens, &$result) {
#
# (38) fpdef_rc_star :=
#
$result = reset($tokens);

}

function reduce_39_fpdef_rc_1($tokens, &$result) {
#
# (39) fpdef_rc :=  fpdef  EQUAL  test  COMMA
#
$result = reset($tokens);

}

function reduce_40_fpdef_rc_2($tokens, &$result) {
#
# (40) fpdef_rc :=  fpdef  COMMA
#
$result = reset($tokens);

}

function reduce_41_fpdef_lc_star_1($tokens, &$result) {
#
# (41) fpdef_lc_star :=  fpdef_lc_star  fpdef_lc
#
$result = reset($tokens);

}

function reduce_42_fpdef_lc_star_2($tokens, &$result) {
#
# (42) fpdef_lc_star :=  fpdef_lc
#
$result = reset($tokens);

}

function reduce_43_fpdef_lc_star_3($tokens, &$result) {
#
# (43) fpdef_lc_star :=
#
$result = reset($tokens);

}

function reduce_44_fpdef_lc_1($tokens, &$result) {
#
# (44) fpdef_lc :=  COMMA  fpdef  EQUAL  test
#
$result = reset($tokens);

}

function reduce_45_fpdef_lc_2($tokens, &$result) {
#
# (45) fpdef_lc :=  COMMA  fpdef
#
$result = reset($tokens);

}

function reduce_46_fpdef_1($tokens, &$result) {
#
# (46) fpdef :=  NAME
#
$result = reset($tokens);

}

function reduce_47_fpdef_2($tokens, &$result) {
#
# (47) fpdef :=  RBO  fplist  RBC
#
$result = reset($tokens);

}

function reduce_48_fplist_1($tokens, &$result) {
#
# (48) fplist :=  fpdef  fpdefs  COMMA
#
$result = reset($tokens);

}

function reduce_49_fplist_2($tokens, &$result) {
#
# (49) fplist :=  fpdef  fpdefs
#
$result = reset($tokens);

}

function reduce_50_fpdefs_1($tokens, &$result) {
#
# (50) fpdefs :=  fpdefs  COMMA  fpdef
#
$result = reset($tokens);

}

function reduce_51_fpdefs_2($tokens, &$result) {
#
# (51) fpdefs :=  COMMA  fpdef
#
$result = reset($tokens);

}

function reduce_52_fpdefs_3($tokens, &$result) {
#
# (52) fpdefs :=
#
$result = reset($tokens);

}

function reduce_53_expr_stmt_1($tokens, &$result) {
#
# (53) expr_stmt :=  testlist  augassign  yield_expr
#
$result = reset($tokens);

}

function reduce_54_expr_stmt_2($tokens, &$result) {
#
# (54) expr_stmt :=  testlist  augassign  testlist
#
$result = reset($tokens);

}

function reduce_55_expr_stmt_3($tokens, &$result) {
#
# (55) expr_stmt :=  testlist  ASSIGN  yield_expr
#
$result = reset($tokens);

}

function reduce_56_expr_stmt_4($tokens, &$result) {
#
# (56) expr_stmt :=  testlist  ASSIGN  testlist
#
$result = reset($tokens);
 lang_python_memory::assign($tokens[0],$tokens[2]); 
}

function reduce_57_expr_stmt_5($tokens, &$result) {
#
# (57) expr_stmt :=  testlist
#
$result = reset($tokens);
 static::python_resolve_testlist(); 
}

function reduce_58_augassign_1($tokens, &$result) {
#
# (58) augassign :=  PLUSEQUAL
#
$result = reset($tokens);

}

function reduce_59_augassign_2($tokens, &$result) {
#
# (59) augassign :=  MINUSEQUAL
#
$result = reset($tokens);

}

function reduce_60_augassign_3($tokens, &$result) {
#
# (60) augassign :=  STAREQUAL
#
$result = reset($tokens);

}

function reduce_61_augassign_4($tokens, &$result) {
#
# (61) augassign :=  SLASHEQUAL
#
$result = reset($tokens);

}

function reduce_62_augassign_5($tokens, &$result) {
#
# (62) augassign :=  MODEQUAL
#
$result = reset($tokens);

}

function reduce_63_augassign_6($tokens, &$result) {
#
# (63) augassign :=  AMPEQUAL
#
$result = reset($tokens);

}

function reduce_64_augassign_7($tokens, &$result) {
#
# (64) augassign :=  PIPEEQUAL
#
$result = reset($tokens);

}

function reduce_65_augassign_8($tokens, &$result) {
#
# (65) augassign :=  ACUEQUAL
#
$result = reset($tokens);

}

function reduce_66_augassign_9($tokens, &$result) {
#
# (66) augassign :=  LSHIFTEQUAL
#
$result = reset($tokens);

}

function reduce_67_augassign_10($tokens, &$result) {
#
# (67) augassign :=  RSHIFTEQUAL
#
$result = reset($tokens);

}

function reduce_68_augassign_11($tokens, &$result) {
#
# (68) augassign :=  DSTAREQUAL
#
$result = reset($tokens);

}

function reduce_69_augassign_12($tokens, &$result) {
#
# (69) augassign :=  DSLASHEQUAL
#
$result = reset($tokens);

}

function reduce_70_compound_stmt_1($tokens, &$result) {
#
# (70) compound_stmt :=  if_stmt
#
$result = reset($tokens);

}

function reduce_71_compound_stmt_2($tokens, &$result) {
#
# (71) compound_stmt :=  while_stmt
#
$result = reset($tokens);

}

function reduce_72_compound_stmt_3($tokens, &$result) {
#
# (72) compound_stmt :=  funcdef
#
$result = reset($tokens);

}

function reduce_73_compound_stmt_4($tokens, &$result) {
#
# (73) compound_stmt :=  classdef
#
$result = reset($tokens);

}

function reduce_74_if_stmt_1($tokens, &$result) {
#
# (74) if_stmt :=  if_stmt_simple
#
$result = reset($tokens);

}

function reduce_75_if_stmt_2($tokens, &$result) {
#
# (75) if_stmt :=  if_stmt_with_else
#
$result = reset($tokens);

}

function reduce_76_if_stmt_simple76_1($tokens, &$result) {
#
# (76) 'if_stmt_simple'76 :=  IF  test  COLON
#
$result = reset($tokens);
 lang_python_stmt::if_begin($tokens[1]); 
}

function reduce_77_if_stmt_simple_1($tokens, &$result) {
#
# (77) if_stmt_simple :=  'if_stmt_simple'76  suite
#
$result = reset($tokens);
 lang_python_stmt::if_end(); 
}

function reduce_78_if_stmt_with_else78_1($tokens, &$result) {
#
# (78) 'if_stmt_with_else'78 :=  IF  test  COLON
#
$result = reset($tokens);
 lang_python_stmt::if_begin($tokens[1]); 
}

function reduce_79_if_stmt_with_else79_1($tokens, &$result) {
#
# (79) 'if_stmt_with_else'79 :=  'if_stmt_with_else'78  suite  ELSE  COLON
#
$result = reset($tokens);
 lang_python_stmt::if_else(); 
}

function reduce_80_if_stmt_with_else_1($tokens, &$result) {
#
# (80) if_stmt_with_else :=  'if_stmt_with_else'79  suite
#
$result = reset($tokens);
 lang_python_stmt::if_end(); 
}

function reduce_81_while_stmt_1($tokens, &$result) {
#
# (81) while_stmt :=  WHILE  test  COLON  suite
#
$result = reset($tokens);

}

function reduce_82_while_stmt_2($tokens, &$result) {
#
# (82) while_stmt :=  WHILE  test  COLON  suite  ELSE  COLON  suite
#
$result = reset($tokens);

}

function reduce_83_print_stmt_1($tokens, &$result) {
#
# (83) print_stmt :=  PRINT  test
#
$result = reset($tokens);
 lang_python_io::__print__($tokens[1]); 
}

function reduce_84_flow_stmt_1($tokens, &$result) {
#
# (84) flow_stmt :=  return_stmt
#
$result = reset($tokens);

}

function reduce_85_return_stmt_1($tokens, &$result) {
#
# (85) return_stmt :=  RETURN  testlist
#
$result = reset($tokens);
 lang_python_stmt::__return__($tokens[1]); 
}

function reduce_86_return_stmt_2($tokens, &$result) {
#
# (86) return_stmt :=  RETURN
#
$result = reset($tokens);
 lang_python_stmt::__return__(); 
}

function reduce_87_suite_1($tokens, &$result) {
#
# (87) suite :=  simple_stmt
#
$result = reset($tokens);

}

function reduce_88_suite_2($tokens, &$result) {
#
# (88) suite :=  NEWLINE  INDENT  stmt_loads  DEDENT
#
$result = reset($tokens);

}

function reduce_89_testlist_1($tokens, &$result) {
#
# (89) testlist :=  test
#
$result = reset($tokens);

}

function reduce_90_test_1($tokens, &$result) {
#
# (90) test :=  or_test  IF  or_test  ELSE  test
#
$result = reset($tokens);

}

function reduce_91_test_2($tokens, &$result) {
#
# (91) test :=  or_test
#
$result = reset($tokens);

}

function reduce_92_test_3($tokens, &$result) {
#
# (92) test :=  lambdef
#
$result = reset($tokens);

}

function reduce_93_or_test_1($tokens, &$result) {
#
# (93) or_test :=  and_test  OR  and_test
#
$result = reset($tokens);

}

function reduce_94_or_test_2($tokens, &$result) {
#
# (94) or_test :=  and_test
#
$result = reset($tokens);

}

function reduce_95_and_test_1($tokens, &$result) {
#
# (95) and_test :=  not_test  AND  not_test
#
$result = reset($tokens);

}

function reduce_96_and_test_2($tokens, &$result) {
#
# (96) and_test :=  not_test
#
$result = reset($tokens);

}

function reduce_97_not_test_1($tokens, &$result) {
#
# (97) not_test :=  NOT  not_test
#
$result = reset($tokens);

}

function reduce_98_not_test_2($tokens, &$result) {
#
# (98) not_test :=  comparison
#
$result = reset($tokens);

}

function reduce_99_comparison_1($tokens, &$result) {
#
# (99) comparison :=  expr  comp_op  expr
#
$result = reset($tokens);
 $result = static::python_comparison($tokens[0],$tokens[1],$tokens[2]); 
}

function reduce_100_comparison_2($tokens, &$result) {
#
# (100) comparison :=  expr
#
$result = reset($tokens);

}

function reduce_101_comp_op_1($tokens, &$result) {
#
# (101) comp_op :=  LESS
#
$result = reset($tokens);

}

function reduce_102_comp_op_2($tokens, &$result) {
#
# (102) comp_op :=  GREAT
#
$result = reset($tokens);

}

function reduce_103_comp_op_3($tokens, &$result) {
#
# (103) comp_op :=  EQUAL
#
$result = reset($tokens);

}

function reduce_104_comp_op_4($tokens, &$result) {
#
# (104) comp_op :=  GREATEQUAL
#
$result = reset($tokens);

}

function reduce_105_comp_op_5($tokens, &$result) {
#
# (105) comp_op :=  LESSEQUAL
#
$result = reset($tokens);

}

function reduce_106_comp_op_6($tokens, &$result) {
#
# (106) comp_op :=  DIFF
#
$result = reset($tokens);

}

function reduce_107_comp_op_7($tokens, &$result) {
#
# (107) comp_op :=  NOTEQUAL
#
$result = reset($tokens);

}

function reduce_108_comp_op_8($tokens, &$result) {
#
# (108) comp_op :=  IN
#
$result = reset($tokens);

}

function reduce_109_comp_op_9($tokens, &$result) {
#
# (109) comp_op :=  NOT  IN
#
$result = reset($tokens);

}

function reduce_110_comp_op_10($tokens, &$result) {
#
# (110) comp_op :=  IS
#
$result = reset($tokens);

}

function reduce_111_comp_op_11($tokens, &$result) {
#
# (111) comp_op :=  IS  NOT
#
$result = reset($tokens);

}

function reduce_112_expr_1($tokens, &$result) {
#
# (112) expr :=  xor_expr  PIPE  xor_expr
#
$result = reset($tokens);

}

function reduce_113_expr_2($tokens, &$result) {
#
# (113) expr :=  xor_expr
#
$result = reset($tokens);

}

function reduce_114_xor_expr_1($tokens, &$result) {
#
# (114) xor_expr :=  and_expr  ACUE  and_expr
#
$result = reset($tokens);

}

function reduce_115_xor_expr_2($tokens, &$result) {
#
# (115) xor_expr :=  and_expr
#
$result = reset($tokens);

}

function reduce_116_and_expr_1($tokens, &$result) {
#
# (116) and_expr :=  shift_expr  AMPE  shift_expr
#
$result = reset($tokens);

}

function reduce_117_and_expr_2($tokens, &$result) {
#
# (117) and_expr :=  shift_expr
#
$result = reset($tokens);

}

function reduce_118_shift_expr_1($tokens, &$result) {
#
# (118) shift_expr :=  arith_expr  LSHIFT  arith_expr
#
$result = reset($tokens);

}

function reduce_119_shift_expr_2($tokens, &$result) {
#
# (119) shift_expr :=  arith_expr  RSHIFT  arith_expr
#
$result = reset($tokens);

}

function reduce_120_shift_expr_3($tokens, &$result) {
#
# (120) shift_expr :=  arith_expr
#
$result = reset($tokens);

}

function reduce_121_arith_expr_1($tokens, &$result) {
#
# (121) arith_expr :=  term  PLUS  term
#
$result = reset($tokens);
 $result = lang_python_op::plus($tokens[0],$tokens[2]); 
}

function reduce_122_arith_expr_2($tokens, &$result) {
#
# (122) arith_expr :=  term  MINUS  term
#
$result = reset($tokens);
 $result = $tokens[0] - $tokens[2]; 
}

function reduce_123_arith_expr_3($tokens, &$result) {
#
# (123) arith_expr :=  term
#
$result = reset($tokens);

}

function reduce_124_term_1($tokens, &$result) {
#
# (124) term :=  factor  STAR  factor
#
$result = reset($tokens);
 $result = $tokens[0] * $tokens[2]; 
}

function reduce_125_term_2($tokens, &$result) {
#
# (125) term :=  factor  SLASH  factor
#
$result = reset($tokens);
 $result = $tokens[0] / $tokens[2]; 
}

function reduce_126_term_3($tokens, &$result) {
#
# (126) term :=  factor  MOD  factor
#
$result = reset($tokens);
 $result = python_mod($tokens[0],$tokens[2]); 
}

function reduce_127_term_4($tokens, &$result) {
#
# (127) term :=  factor  DSLASH  factor
#
$result = reset($tokens);

}

function reduce_128_term_5($tokens, &$result) {
#
# (128) term :=  factor
#
$result = reset($tokens);

}

function reduce_129_factor_1($tokens, &$result) {
#
# (129) factor :=  PLUS  factor
#
$result = reset($tokens);

}

function reduce_130_factor_2($tokens, &$result) {
#
# (130) factor :=  MINUS  factor
#
$result = reset($tokens);

}

function reduce_131_factor_3($tokens, &$result) {
#
# (131) factor :=  TILDE  factor
#
$result = reset($tokens);

}

function reduce_132_factor_4($tokens, &$result) {
#
# (132) factor :=  power
#
$result = reset($tokens);

}

function reduce_133_power_1($tokens, &$result) {
#
# (133) power :=  atom  trailers  DSTAR  factor
#
$result = reset($tokens);

}

function reduce_134_power_2($tokens, &$result) {
#
# (134) power :=  atom  trailers
#
$result = reset($tokens);

}

function reduce_135_trailers_1($tokens, &$result) {
#
# (135) trailers :=  trailers  trailer
#
$result = reset($tokens);

}

function reduce_136_trailers_2($tokens, &$result) {
#
# (136) trailers :=  trailer
#
$result = reset($tokens);

}

function reduce_137_trailers_3($tokens, &$result) {
#
# (137) trailers :=
#
$result = reset($tokens);

}

function reduce_138_trailer_1($tokens, &$result) {
#
# (138) trailer :=  RBO  RBC
#
$result = reset($tokens);

}

function reduce_139_trailer_2($tokens, &$result) {
#
# (139) trailer :=  RBO  arglist  RBC
#
$result = reset($tokens);

}

function reduce_140_trailer_3($tokens, &$result) {
#
# (140) trailer :=  SBO  subscriptlist  SBC
#
$result = reset($tokens);

}

function reduce_141_trailer_4($tokens, &$result) {
#
# (141) trailer :=  DOT  NAME
#
$result = reset($tokens);

}

function reduce_142_arglist_1($tokens, &$result) {
#
# (142) arglist :=  arglists_rc  argument  COMMA
#
$result = reset($tokens);

}

function reduce_143_arglist_2($tokens, &$result) {
#
# (143) arglist :=  arglists_rc  argument
#
$result = reset($tokens);

}

function reduce_144_arglist_3($tokens, &$result) {
#
# (144) arglist :=  arglists_rc  STAR  test  arglists_lc  COMMA  DSTAR  test
#
$result = reset($tokens);

}

function reduce_145_arglist_4($tokens, &$result) {
#
# (145) arglist :=  arglists_rc  STAR  test  arglists_lc
#
$result = reset($tokens);

}

function reduce_146_arglist_5($tokens, &$result) {
#
# (146) arglist :=  arglists_rc  DSTAR  test
#
$result = reset($tokens);

}

function reduce_147_arglists_rc_1($tokens, &$result) {
#
# (147) arglists_rc :=  arglists_rc  argument  COMMA
#
$result = reset($tokens);

}

function reduce_148_arglists_rc_2($tokens, &$result) {
#
# (148) arglists_rc :=  argument  COMMA
#
$result = reset($tokens);

}

function reduce_149_arglists_rc_3($tokens, &$result) {
#
# (149) arglists_rc :=
#
$result = reset($tokens);

}

function reduce_150_arglists_lc_1($tokens, &$result) {
#
# (150) arglists_lc :=  arglists_lc  COMMA  argument
#
$result = reset($tokens);

}

function reduce_151_arglists_lc_2($tokens, &$result) {
#
# (151) arglists_lc :=  COMMA  argument
#
$result = reset($tokens);

}

function reduce_152_arglists_lc_3($tokens, &$result) {
#
# (152) arglists_lc :=
#
$result = reset($tokens);

}

function reduce_153_argument_1($tokens, &$result) {
#
# (153) argument :=  test
#
$result = reset($tokens);

}

function reduce_154_argument_2($tokens, &$result) {
#
# (154) argument :=  test  EQUAL  test
#
$result = reset($tokens);

}

function reduce_155_testlist_comp_1($tokens, &$result) {
#
# (155) testlist_comp :=  testlist_comp_for
#
$result = reset($tokens);

}

function reduce_156_testlist_comp_2($tokens, &$result) {
#
# (156) testlist_comp :=  test  test_tail
#
$result = reset($tokens);
 $result = array("ciao"); echo "ad"; 
}

function reduce_157_testlist_comp_3($tokens, &$result) {
#
# (157) testlist_comp :=  test
#
$result = reset($tokens);

}

function reduce_158_testlist_comp_4($tokens, &$result) {
#
# (158) testlist_comp :=
#
$result = reset($tokens);

}

function reduce_159_test_tail_1($tokens, &$result) {
#
# (159) test_tail :=  COMMA  test  test_tail
#
$result = reset($tokens);

}

function reduce_160_test_tail_2($tokens, &$result) {
#
# (160) test_tail :=  COMMA  test
#
$result = reset($tokens);
echo "as";
}

function reduce_161_test_tail_3($tokens, &$result) {
#
# (161) test_tail :=
#
$result = reset($tokens);

}

function reduce_162_atom_1($tokens, &$result) {
#
# (162) atom :=  SBO  testlist_comp  SBC
#
$result = reset($tokens);
 $result = python_list($tokens[1]); 
}

function reduce_163_atom_2($tokens, &$result) {
#
# (163) atom :=  BO  dictorsetmaker  BC
#
$result = reset($tokens);

}

function reduce_164_atom_3($tokens, &$result) {
#
# (164) atom :=  NAME
#
$result = reset($tokens);

}

function reduce_165_atom_4($tokens, &$result) {
#
# (165) atom :=  NUMBER
#
$result = reset($tokens);

}

function reduce_166_atom_5($tokens, &$result) {
#
# (166) atom :=  STRING
#
$result = reset($tokens);

}

function reduce_167_atom_6($tokens, &$result) {
#
# (167) atom :=  TRIPLEDOT
#
$result = reset($tokens);

}

function reduce_168_atom_7($tokens, &$result) {
#
# (168) atom :=  NONE
#
$result = reset($tokens);

}

function reduce_169_atom_8($tokens, &$result) {
#
# (169) atom :=  TRUE
#
$result = reset($tokens);

}

function reduce_170_atom_9($tokens, &$result) {
#
# (170) atom :=  FALSE
#
$result = reset($tokens);

}

function reduce_171_classdef_1($tokens, &$result) {
#
# (171) classdef :=  CLASS  NAME  RBO  testlist  RBC  COLON  suite
#
$result = reset($tokens);

}

function reduce_172_classdef_2($tokens, &$result) {
#
# (172) classdef :=  CLASS  NAME  RBO  RBC  COLON  suite
#
$result = reset($tokens);

}

function reduce_173_classdef173_1($tokens, &$result) {
#
# (173) 'classdef'173 :=  CLASS  NAME  COLON
#
$result = reset($tokens);
 static::python_class($tokens[1]); 
}

function reduce_174_classdef_3($tokens, &$result) {
#
# (174) classdef :=  'classdef'173  suite
#
$result = reset($tokens);
 static::python_class_end(); 
}

function reduce_175_start_1($tokens, &$result) {
#
# (175) 'start' :=  stmt_start
#
$result = reset($tokens);

}

var $method = array (
  0 => 'reduce_0_stmt_start_1',
  1 => 'reduce_1_stmt_loads_1',
  2 => 'reduce_2_stmt_loads_2',
  3 => 'reduce_3_stmt_block_1',
  4 => 'reduce_4_stmt_block_2',
  5 => 'reduce_5_simple_stmt_1',
  6 => 'reduce_6_small_stmt_1',
  7 => 'reduce_7_small_stmt_2',
  8 => 'reduce_8_small_stmt_3',
  9 => 'reduce_9_small_stmt_4',
  10 => 'reduce_10_import_stmt_1',
  11 => 'reduce_11_import_stmt_2',
  12 => 'reduce_12_import_name_1',
  13 => 'reduce_13_import_from_1',
  14 => 'reduce_14_import_from_2',
  15 => 'reduce_15_import_as_name_1',
  16 => 'reduce_16_import_as_name_2',
  17 => 'reduce_17_dotted_as_name_1',
  18 => 'reduce_18_dotted_as_name_2',
  19 => 'reduce_19_import_as_names_1',
  20 => 'reduce_20_import_as_names_2',
  21 => 'reduce_21_dotted_as_names_1',
  22 => 'reduce_22_dotted_as_names_2',
  23 => 'reduce_23_dotted_name_1',
  24 => 'reduce_24_dotted_name_2',
  25 => 'reduce_25_funcdef25_1',
  26 => 'reduce_26_funcdef_1',
  27 => 'reduce_27_parameters_1',
  28 => 'reduce_28_parameters_2',
  29 => 'reduce_29_varargslist_1',
  30 => 'reduce_30_varargslist_2',
  31 => 'reduce_31_varargslist_3',
  32 => 'reduce_32_varargslist_4',
  33 => 'reduce_33_varargslist_5',
  34 => 'reduce_34_varargslist_6',
  35 => 'reduce_35_varargslist_7',
  36 => 'reduce_36_fpdef_rc_star_1',
  37 => 'reduce_37_fpdef_rc_star_2',
  38 => 'reduce_38_fpdef_rc_star_3',
  39 => 'reduce_39_fpdef_rc_1',
  40 => 'reduce_40_fpdef_rc_2',
  41 => 'reduce_41_fpdef_lc_star_1',
  42 => 'reduce_42_fpdef_lc_star_2',
  43 => 'reduce_43_fpdef_lc_star_3',
  44 => 'reduce_44_fpdef_lc_1',
  45 => 'reduce_45_fpdef_lc_2',
  46 => 'reduce_46_fpdef_1',
  47 => 'reduce_47_fpdef_2',
  48 => 'reduce_48_fplist_1',
  49 => 'reduce_49_fplist_2',
  50 => 'reduce_50_fpdefs_1',
  51 => 'reduce_51_fpdefs_2',
  52 => 'reduce_52_fpdefs_3',
  53 => 'reduce_53_expr_stmt_1',
  54 => 'reduce_54_expr_stmt_2',
  55 => 'reduce_55_expr_stmt_3',
  56 => 'reduce_56_expr_stmt_4',
  57 => 'reduce_57_expr_stmt_5',
  58 => 'reduce_58_augassign_1',
  59 => 'reduce_59_augassign_2',
  60 => 'reduce_60_augassign_3',
  61 => 'reduce_61_augassign_4',
  62 => 'reduce_62_augassign_5',
  63 => 'reduce_63_augassign_6',
  64 => 'reduce_64_augassign_7',
  65 => 'reduce_65_augassign_8',
  66 => 'reduce_66_augassign_9',
  67 => 'reduce_67_augassign_10',
  68 => 'reduce_68_augassign_11',
  69 => 'reduce_69_augassign_12',
  70 => 'reduce_70_compound_stmt_1',
  71 => 'reduce_71_compound_stmt_2',
  72 => 'reduce_72_compound_stmt_3',
  73 => 'reduce_73_compound_stmt_4',
  74 => 'reduce_74_if_stmt_1',
  75 => 'reduce_75_if_stmt_2',
  76 => 'reduce_76_if_stmt_simple76_1',
  77 => 'reduce_77_if_stmt_simple_1',
  78 => 'reduce_78_if_stmt_with_else78_1',
  79 => 'reduce_79_if_stmt_with_else79_1',
  80 => 'reduce_80_if_stmt_with_else_1',
  81 => 'reduce_81_while_stmt_1',
  82 => 'reduce_82_while_stmt_2',
  83 => 'reduce_83_print_stmt_1',
  84 => 'reduce_84_flow_stmt_1',
  85 => 'reduce_85_return_stmt_1',
  86 => 'reduce_86_return_stmt_2',
  87 => 'reduce_87_suite_1',
  88 => 'reduce_88_suite_2',
  89 => 'reduce_89_testlist_1',
  90 => 'reduce_90_test_1',
  91 => 'reduce_91_test_2',
  92 => 'reduce_92_test_3',
  93 => 'reduce_93_or_test_1',
  94 => 'reduce_94_or_test_2',
  95 => 'reduce_95_and_test_1',
  96 => 'reduce_96_and_test_2',
  97 => 'reduce_97_not_test_1',
  98 => 'reduce_98_not_test_2',
  99 => 'reduce_99_comparison_1',
  100 => 'reduce_100_comparison_2',
  101 => 'reduce_101_comp_op_1',
  102 => 'reduce_102_comp_op_2',
  103 => 'reduce_103_comp_op_3',
  104 => 'reduce_104_comp_op_4',
  105 => 'reduce_105_comp_op_5',
  106 => 'reduce_106_comp_op_6',
  107 => 'reduce_107_comp_op_7',
  108 => 'reduce_108_comp_op_8',
  109 => 'reduce_109_comp_op_9',
  110 => 'reduce_110_comp_op_10',
  111 => 'reduce_111_comp_op_11',
  112 => 'reduce_112_expr_1',
  113 => 'reduce_113_expr_2',
  114 => 'reduce_114_xor_expr_1',
  115 => 'reduce_115_xor_expr_2',
  116 => 'reduce_116_and_expr_1',
  117 => 'reduce_117_and_expr_2',
  118 => 'reduce_118_shift_expr_1',
  119 => 'reduce_119_shift_expr_2',
  120 => 'reduce_120_shift_expr_3',
  121 => 'reduce_121_arith_expr_1',
  122 => 'reduce_122_arith_expr_2',
  123 => 'reduce_123_arith_expr_3',
  124 => 'reduce_124_term_1',
  125 => 'reduce_125_term_2',
  126 => 'reduce_126_term_3',
  127 => 'reduce_127_term_4',
  128 => 'reduce_128_term_5',
  129 => 'reduce_129_factor_1',
  130 => 'reduce_130_factor_2',
  131 => 'reduce_131_factor_3',
  132 => 'reduce_132_factor_4',
  133 => 'reduce_133_power_1',
  134 => 'reduce_134_power_2',
  135 => 'reduce_135_trailers_1',
  136 => 'reduce_136_trailers_2',
  137 => 'reduce_137_trailers_3',
  138 => 'reduce_138_trailer_1',
  139 => 'reduce_139_trailer_2',
  140 => 'reduce_140_trailer_3',
  141 => 'reduce_141_trailer_4',
  142 => 'reduce_142_arglist_1',
  143 => 'reduce_143_arglist_2',
  144 => 'reduce_144_arglist_3',
  145 => 'reduce_145_arglist_4',
  146 => 'reduce_146_arglist_5',
  147 => 'reduce_147_arglists_rc_1',
  148 => 'reduce_148_arglists_rc_2',
  149 => 'reduce_149_arglists_rc_3',
  150 => 'reduce_150_arglists_lc_1',
  151 => 'reduce_151_arglists_lc_2',
  152 => 'reduce_152_arglists_lc_3',
  153 => 'reduce_153_argument_1',
  154 => 'reduce_154_argument_2',
  155 => 'reduce_155_testlist_comp_1',
  156 => 'reduce_156_testlist_comp_2',
  157 => 'reduce_157_testlist_comp_3',
  158 => 'reduce_158_testlist_comp_4',
  159 => 'reduce_159_test_tail_1',
  160 => 'reduce_160_test_tail_2',
  161 => 'reduce_161_test_tail_3',
  162 => 'reduce_162_atom_1',
  163 => 'reduce_163_atom_2',
  164 => 'reduce_164_atom_3',
  165 => 'reduce_165_atom_4',
  166 => 'reduce_166_atom_5',
  167 => 'reduce_167_atom_6',
  168 => 'reduce_168_atom_7',
  169 => 'reduce_169_atom_8',
  170 => 'reduce_170_atom_9',
  171 => 'reduce_171_classdef_1',
  172 => 'reduce_172_classdef_2',
  173 => 'reduce_173_classdef173_1',
  174 => 'reduce_174_classdef_3',
  175 => 'reduce_175_start_1',
);
var $a = array (
  0 => 
  array (
    'symbol' => 'stmt_start',
    'len' => 2,
    'replace' => true,
  ),
  1 => 
  array (
    'symbol' => 'stmt_loads',
    'len' => 2,
    'replace' => true,
  ),
  2 => 
  array (
    'symbol' => 'stmt_loads',
    'len' => 1,
    'replace' => true,
  ),
  3 => 
  array (
    'symbol' => 'stmt_block',
    'len' => 1,
    'replace' => true,
  ),
  4 => 
  array (
    'symbol' => 'stmt_block',
    'len' => 1,
    'replace' => true,
  ),
  5 => 
  array (
    'symbol' => 'simple_stmt',
    'len' => 2,
    'replace' => true,
  ),
  6 => 
  array (
    'symbol' => 'small_stmt',
    'len' => 1,
    'replace' => true,
  ),
  7 => 
  array (
    'symbol' => 'small_stmt',
    'len' => 1,
    'replace' => true,
  ),
  8 => 
  array (
    'symbol' => 'small_stmt',
    'len' => 1,
    'replace' => true,
  ),
  9 => 
  array (
    'symbol' => 'small_stmt',
    'len' => 1,
    'replace' => true,
  ),
  10 => 
  array (
    'symbol' => 'import_stmt',
    'len' => 1,
    'replace' => true,
  ),
  11 => 
  array (
    'symbol' => 'import_stmt',
    'len' => 1,
    'replace' => true,
  ),
  12 => 
  array (
    'symbol' => 'import_name',
    'len' => 2,
    'replace' => true,
  ),
  13 => 
  array (
    'symbol' => 'import_from',
    'len' => 4,
    'replace' => true,
  ),
  14 => 
  array (
    'symbol' => 'import_from',
    'len' => 4,
    'replace' => true,
  ),
  15 => 
  array (
    'symbol' => 'import_as_name',
    'len' => 1,
    'replace' => true,
  ),
  16 => 
  array (
    'symbol' => 'import_as_name',
    'len' => 3,
    'replace' => true,
  ),
  17 => 
  array (
    'symbol' => 'dotted_as_name',
    'len' => 1,
    'replace' => true,
  ),
  18 => 
  array (
    'symbol' => 'dotted_as_name',
    'len' => 3,
    'replace' => true,
  ),
  19 => 
  array (
    'symbol' => 'import_as_names',
    'len' => 1,
    'replace' => true,
  ),
  20 => 
  array (
    'symbol' => 'import_as_names',
    'len' => 3,
    'replace' => true,
  ),
  21 => 
  array (
    'symbol' => 'dotted_as_names',
    'len' => 1,
    'replace' => true,
  ),
  22 => 
  array (
    'symbol' => 'dotted_as_names',
    'len' => 3,
    'replace' => true,
  ),
  23 => 
  array (
    'symbol' => 'dotted_name',
    'len' => 1,
    'replace' => true,
  ),
  24 => 
  array (
    'symbol' => 'dotted_name',
    'len' => 3,
    'replace' => true,
  ),
  25 => 
  array (
    'symbol' => '\'funcdef\'25',
    'len' => 4,
    'replace' => false,
  ),
  26 => 
  array (
    'symbol' => 'funcdef',
    'len' => 6,
    'replace' => true,
  ),
  27 => 
  array (
    'symbol' => 'parameters',
    'len' => 3,
    'replace' => true,
  ),
  28 => 
  array (
    'symbol' => 'parameters',
    'len' => 2,
    'replace' => true,
  ),
  29 => 
  array (
    'symbol' => 'varargslist',
    'len' => 6,
    'replace' => true,
  ),
  30 => 
  array (
    'symbol' => 'varargslist',
    'len' => 3,
    'replace' => true,
  ),
  31 => 
  array (
    'symbol' => 'varargslist',
    'len' => 3,
    'replace' => true,
  ),
  32 => 
  array (
    'symbol' => 'varargslist',
    'len' => 5,
    'replace' => true,
  ),
  33 => 
  array (
    'symbol' => 'varargslist',
    'len' => 3,
    'replace' => true,
  ),
  34 => 
  array (
    'symbol' => 'varargslist',
    'len' => 4,
    'replace' => true,
  ),
  35 => 
  array (
    'symbol' => 'varargslist',
    'len' => 2,
    'replace' => true,
  ),
  36 => 
  array (
    'symbol' => 'fpdef_rc_star',
    'len' => 2,
    'replace' => true,
  ),
  37 => 
  array (
    'symbol' => 'fpdef_rc_star',
    'len' => 1,
    'replace' => true,
  ),
  38 => 
  array (
    'symbol' => 'fpdef_rc_star',
    'len' => 0,
    'replace' => true,
  ),
  39 => 
  array (
    'symbol' => 'fpdef_rc',
    'len' => 4,
    'replace' => true,
  ),
  40 => 
  array (
    'symbol' => 'fpdef_rc',
    'len' => 2,
    'replace' => true,
  ),
  41 => 
  array (
    'symbol' => 'fpdef_lc_star',
    'len' => 2,
    'replace' => true,
  ),
  42 => 
  array (
    'symbol' => 'fpdef_lc_star',
    'len' => 1,
    'replace' => true,
  ),
  43 => 
  array (
    'symbol' => 'fpdef_lc_star',
    'len' => 0,
    'replace' => true,
  ),
  44 => 
  array (
    'symbol' => 'fpdef_lc',
    'len' => 4,
    'replace' => true,
  ),
  45 => 
  array (
    'symbol' => 'fpdef_lc',
    'len' => 2,
    'replace' => true,
  ),
  46 => 
  array (
    'symbol' => 'fpdef',
    'len' => 1,
    'replace' => true,
  ),
  47 => 
  array (
    'symbol' => 'fpdef',
    'len' => 3,
    'replace' => true,
  ),
  48 => 
  array (
    'symbol' => 'fplist',
    'len' => 3,
    'replace' => true,
  ),
  49 => 
  array (
    'symbol' => 'fplist',
    'len' => 2,
    'replace' => true,
  ),
  50 => 
  array (
    'symbol' => 'fpdefs',
    'len' => 3,
    'replace' => true,
  ),
  51 => 
  array (
    'symbol' => 'fpdefs',
    'len' => 2,
    'replace' => true,
  ),
  52 => 
  array (
    'symbol' => 'fpdefs',
    'len' => 0,
    'replace' => true,
  ),
  53 => 
  array (
    'symbol' => 'expr_stmt',
    'len' => 3,
    'replace' => true,
  ),
  54 => 
  array (
    'symbol' => 'expr_stmt',
    'len' => 3,
    'replace' => true,
  ),
  55 => 
  array (
    'symbol' => 'expr_stmt',
    'len' => 3,
    'replace' => true,
  ),
  56 => 
  array (
    'symbol' => 'expr_stmt',
    'len' => 3,
    'replace' => true,
  ),
  57 => 
  array (
    'symbol' => 'expr_stmt',
    'len' => 1,
    'replace' => true,
  ),
  58 => 
  array (
    'symbol' => 'augassign',
    'len' => 1,
    'replace' => true,
  ),
  59 => 
  array (
    'symbol' => 'augassign',
    'len' => 1,
    'replace' => true,
  ),
  60 => 
  array (
    'symbol' => 'augassign',
    'len' => 1,
    'replace' => true,
  ),
  61 => 
  array (
    'symbol' => 'augassign',
    'len' => 1,
    'replace' => true,
  ),
  62 => 
  array (
    'symbol' => 'augassign',
    'len' => 1,
    'replace' => true,
  ),
  63 => 
  array (
    'symbol' => 'augassign',
    'len' => 1,
    'replace' => true,
  ),
  64 => 
  array (
    'symbol' => 'augassign',
    'len' => 1,
    'replace' => true,
  ),
  65 => 
  array (
    'symbol' => 'augassign',
    'len' => 1,
    'replace' => true,
  ),
  66 => 
  array (
    'symbol' => 'augassign',
    'len' => 1,
    'replace' => true,
  ),
  67 => 
  array (
    'symbol' => 'augassign',
    'len' => 1,
    'replace' => true,
  ),
  68 => 
  array (
    'symbol' => 'augassign',
    'len' => 1,
    'replace' => true,
  ),
  69 => 
  array (
    'symbol' => 'augassign',
    'len' => 1,
    'replace' => true,
  ),
  70 => 
  array (
    'symbol' => 'compound_stmt',
    'len' => 1,
    'replace' => true,
  ),
  71 => 
  array (
    'symbol' => 'compound_stmt',
    'len' => 1,
    'replace' => true,
  ),
  72 => 
  array (
    'symbol' => 'compound_stmt',
    'len' => 1,
    'replace' => true,
  ),
  73 => 
  array (
    'symbol' => 'compound_stmt',
    'len' => 1,
    'replace' => true,
  ),
  74 => 
  array (
    'symbol' => 'if_stmt',
    'len' => 1,
    'replace' => true,
  ),
  75 => 
  array (
    'symbol' => 'if_stmt',
    'len' => 1,
    'replace' => true,
  ),
  76 => 
  array (
    'symbol' => '\'if_stmt_simple\'76',
    'len' => 3,
    'replace' => false,
  ),
  77 => 
  array (
    'symbol' => 'if_stmt_simple',
    'len' => 5,
    'replace' => true,
  ),
  78 => 
  array (
    'symbol' => '\'if_stmt_with_else\'78',
    'len' => 3,
    'replace' => false,
  ),
  79 => 
  array (
    'symbol' => '\'if_stmt_with_else\'79',
    'len' => 7,
    'replace' => false,
  ),
  80 => 
  array (
    'symbol' => 'if_stmt_with_else',
    'len' => 9,
    'replace' => true,
  ),
  81 => 
  array (
    'symbol' => 'while_stmt',
    'len' => 4,
    'replace' => true,
  ),
  82 => 
  array (
    'symbol' => 'while_stmt',
    'len' => 7,
    'replace' => true,
  ),
  83 => 
  array (
    'symbol' => 'print_stmt',
    'len' => 2,
    'replace' => true,
  ),
  84 => 
  array (
    'symbol' => 'flow_stmt',
    'len' => 1,
    'replace' => true,
  ),
  85 => 
  array (
    'symbol' => 'return_stmt',
    'len' => 2,
    'replace' => true,
  ),
  86 => 
  array (
    'symbol' => 'return_stmt',
    'len' => 1,
    'replace' => true,
  ),
  87 => 
  array (
    'symbol' => 'suite',
    'len' => 1,
    'replace' => true,
  ),
  88 => 
  array (
    'symbol' => 'suite',
    'len' => 4,
    'replace' => true,
  ),
  89 => 
  array (
    'symbol' => 'testlist',
    'len' => 1,
    'replace' => true,
  ),
  90 => 
  array (
    'symbol' => 'test',
    'len' => 5,
    'replace' => true,
  ),
  91 => 
  array (
    'symbol' => 'test',
    'len' => 1,
    'replace' => true,
  ),
  92 => 
  array (
    'symbol' => 'test',
    'len' => 1,
    'replace' => true,
  ),
  93 => 
  array (
    'symbol' => 'or_test',
    'len' => 3,
    'replace' => true,
  ),
  94 => 
  array (
    'symbol' => 'or_test',
    'len' => 1,
    'replace' => true,
  ),
  95 => 
  array (
    'symbol' => 'and_test',
    'len' => 3,
    'replace' => true,
  ),
  96 => 
  array (
    'symbol' => 'and_test',
    'len' => 1,
    'replace' => true,
  ),
  97 => 
  array (
    'symbol' => 'not_test',
    'len' => 2,
    'replace' => true,
  ),
  98 => 
  array (
    'symbol' => 'not_test',
    'len' => 1,
    'replace' => true,
  ),
  99 => 
  array (
    'symbol' => 'comparison',
    'len' => 3,
    'replace' => true,
  ),
  100 => 
  array (
    'symbol' => 'comparison',
    'len' => 1,
    'replace' => true,
  ),
  101 => 
  array (
    'symbol' => 'comp_op',
    'len' => 1,
    'replace' => true,
  ),
  102 => 
  array (
    'symbol' => 'comp_op',
    'len' => 1,
    'replace' => true,
  ),
  103 => 
  array (
    'symbol' => 'comp_op',
    'len' => 1,
    'replace' => true,
  ),
  104 => 
  array (
    'symbol' => 'comp_op',
    'len' => 1,
    'replace' => true,
  ),
  105 => 
  array (
    'symbol' => 'comp_op',
    'len' => 1,
    'replace' => true,
  ),
  106 => 
  array (
    'symbol' => 'comp_op',
    'len' => 1,
    'replace' => true,
  ),
  107 => 
  array (
    'symbol' => 'comp_op',
    'len' => 1,
    'replace' => true,
  ),
  108 => 
  array (
    'symbol' => 'comp_op',
    'len' => 1,
    'replace' => true,
  ),
  109 => 
  array (
    'symbol' => 'comp_op',
    'len' => 2,
    'replace' => true,
  ),
  110 => 
  array (
    'symbol' => 'comp_op',
    'len' => 1,
    'replace' => true,
  ),
  111 => 
  array (
    'symbol' => 'comp_op',
    'len' => 2,
    'replace' => true,
  ),
  112 => 
  array (
    'symbol' => 'expr',
    'len' => 3,
    'replace' => true,
  ),
  113 => 
  array (
    'symbol' => 'expr',
    'len' => 1,
    'replace' => true,
  ),
  114 => 
  array (
    'symbol' => 'xor_expr',
    'len' => 3,
    'replace' => true,
  ),
  115 => 
  array (
    'symbol' => 'xor_expr',
    'len' => 1,
    'replace' => true,
  ),
  116 => 
  array (
    'symbol' => 'and_expr',
    'len' => 3,
    'replace' => true,
  ),
  117 => 
  array (
    'symbol' => 'and_expr',
    'len' => 1,
    'replace' => true,
  ),
  118 => 
  array (
    'symbol' => 'shift_expr',
    'len' => 3,
    'replace' => true,
  ),
  119 => 
  array (
    'symbol' => 'shift_expr',
    'len' => 3,
    'replace' => true,
  ),
  120 => 
  array (
    'symbol' => 'shift_expr',
    'len' => 1,
    'replace' => true,
  ),
  121 => 
  array (
    'symbol' => 'arith_expr',
    'len' => 3,
    'replace' => true,
  ),
  122 => 
  array (
    'symbol' => 'arith_expr',
    'len' => 3,
    'replace' => true,
  ),
  123 => 
  array (
    'symbol' => 'arith_expr',
    'len' => 1,
    'replace' => true,
  ),
  124 => 
  array (
    'symbol' => 'term',
    'len' => 3,
    'replace' => true,
  ),
  125 => 
  array (
    'symbol' => 'term',
    'len' => 3,
    'replace' => true,
  ),
  126 => 
  array (
    'symbol' => 'term',
    'len' => 3,
    'replace' => true,
  ),
  127 => 
  array (
    'symbol' => 'term',
    'len' => 3,
    'replace' => true,
  ),
  128 => 
  array (
    'symbol' => 'term',
    'len' => 1,
    'replace' => true,
  ),
  129 => 
  array (
    'symbol' => 'factor',
    'len' => 2,
    'replace' => true,
  ),
  130 => 
  array (
    'symbol' => 'factor',
    'len' => 2,
    'replace' => true,
  ),
  131 => 
  array (
    'symbol' => 'factor',
    'len' => 2,
    'replace' => true,
  ),
  132 => 
  array (
    'symbol' => 'factor',
    'len' => 1,
    'replace' => true,
  ),
  133 => 
  array (
    'symbol' => 'power',
    'len' => 4,
    'replace' => true,
  ),
  134 => 
  array (
    'symbol' => 'power',
    'len' => 2,
    'replace' => true,
  ),
  135 => 
  array (
    'symbol' => 'trailers',
    'len' => 2,
    'replace' => true,
  ),
  136 => 
  array (
    'symbol' => 'trailers',
    'len' => 1,
    'replace' => true,
  ),
  137 => 
  array (
    'symbol' => 'trailers',
    'len' => 0,
    'replace' => true,
  ),
  138 => 
  array (
    'symbol' => 'trailer',
    'len' => 2,
    'replace' => true,
  ),
  139 => 
  array (
    'symbol' => 'trailer',
    'len' => 3,
    'replace' => true,
  ),
  140 => 
  array (
    'symbol' => 'trailer',
    'len' => 3,
    'replace' => true,
  ),
  141 => 
  array (
    'symbol' => 'trailer',
    'len' => 2,
    'replace' => true,
  ),
  142 => 
  array (
    'symbol' => 'arglist',
    'len' => 3,
    'replace' => true,
  ),
  143 => 
  array (
    'symbol' => 'arglist',
    'len' => 2,
    'replace' => true,
  ),
  144 => 
  array (
    'symbol' => 'arglist',
    'len' => 7,
    'replace' => true,
  ),
  145 => 
  array (
    'symbol' => 'arglist',
    'len' => 4,
    'replace' => true,
  ),
  146 => 
  array (
    'symbol' => 'arglist',
    'len' => 3,
    'replace' => true,
  ),
  147 => 
  array (
    'symbol' => 'arglists_rc',
    'len' => 3,
    'replace' => true,
  ),
  148 => 
  array (
    'symbol' => 'arglists_rc',
    'len' => 2,
    'replace' => true,
  ),
  149 => 
  array (
    'symbol' => 'arglists_rc',
    'len' => 0,
    'replace' => true,
  ),
  150 => 
  array (
    'symbol' => 'arglists_lc',
    'len' => 3,
    'replace' => true,
  ),
  151 => 
  array (
    'symbol' => 'arglists_lc',
    'len' => 2,
    'replace' => true,
  ),
  152 => 
  array (
    'symbol' => 'arglists_lc',
    'len' => 0,
    'replace' => true,
  ),
  153 => 
  array (
    'symbol' => 'argument',
    'len' => 1,
    'replace' => true,
  ),
  154 => 
  array (
    'symbol' => 'argument',
    'len' => 3,
    'replace' => true,
  ),
  155 => 
  array (
    'symbol' => 'testlist_comp',
    'len' => 1,
    'replace' => true,
  ),
  156 => 
  array (
    'symbol' => 'testlist_comp',
    'len' => 2,
    'replace' => true,
  ),
  157 => 
  array (
    'symbol' => 'testlist_comp',
    'len' => 1,
    'replace' => true,
  ),
  158 => 
  array (
    'symbol' => 'testlist_comp',
    'len' => 0,
    'replace' => true,
  ),
  159 => 
  array (
    'symbol' => 'test_tail',
    'len' => 3,
    'replace' => true,
  ),
  160 => 
  array (
    'symbol' => 'test_tail',
    'len' => 2,
    'replace' => true,
  ),
  161 => 
  array (
    'symbol' => 'test_tail',
    'len' => 0,
    'replace' => true,
  ),
  162 => 
  array (
    'symbol' => 'atom',
    'len' => 3,
    'replace' => true,
  ),
  163 => 
  array (
    'symbol' => 'atom',
    'len' => 3,
    'replace' => true,
  ),
  164 => 
  array (
    'symbol' => 'atom',
    'len' => 1,
    'replace' => true,
  ),
  165 => 
  array (
    'symbol' => 'atom',
    'len' => 1,
    'replace' => true,
  ),
  166 => 
  array (
    'symbol' => 'atom',
    'len' => 1,
    'replace' => true,
  ),
  167 => 
  array (
    'symbol' => 'atom',
    'len' => 1,
    'replace' => true,
  ),
  168 => 
  array (
    'symbol' => 'atom',
    'len' => 1,
    'replace' => true,
  ),
  169 => 
  array (
    'symbol' => 'atom',
    'len' => 1,
    'replace' => true,
  ),
  170 => 
  array (
    'symbol' => 'atom',
    'len' => 1,
    'replace' => true,
  ),
  171 => 
  array (
    'symbol' => 'classdef',
    'len' => 7,
    'replace' => true,
  ),
  172 => 
  array (
    'symbol' => 'classdef',
    'len' => 6,
    'replace' => true,
  ),
  173 => 
  array (
    'symbol' => '\'classdef\'173',
    'len' => 3,
    'replace' => false,
  ),
  174 => 
  array (
    'symbol' => 'classdef',
    'len' => 5,
    'replace' => true,
  ),
  175 => 
  array (
    'symbol' => '\'start\'',
    'len' => 1,
    'replace' => true,
  ),
);
}

?>