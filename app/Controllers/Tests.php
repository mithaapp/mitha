<?php

/**
 * Mitha Framework
 *
 * A lightweight PHP framework for developers
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2018 MithaApp
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
 * @package  Mitha Framework
 * @author  Mitha Framework Dev Team
 * @author  Mitha Aprilia <mitha@mithaaprilia.com>
 * @author  Mutasim Ridlo, S.Kom <ridho@mutasimridlo.com>
 * @copyright 2018, MithaApp (https://mitha.app/)
 * @license  https://opensource.org/licenses/MIT	MIT License
 * @link  https://mitha.app
 */

namespace App\Controllers;

use Config\Database;
use Mitha\Controller;

class Tests extends Controller
{
    public function index()
    {
        echo 'coba';
        $db = Database::connect();

        //$db->update('tests', ['name' => 'coba2'], ['id' => 2]);
        print_r($db->getAll('tests', ['id' => 2]));
        //$data = $db->query('select * from tests')->getRow();
        // print_r($data);
        //$db->exec('delete from tests where id=1');
        //echo $db->exec('insert into tests (name) values ("mitha")')->insertId();
        //echo $db->insertId();
        //echo $db->escape("fhf@hfh");

        //echo 'sss';
        //$get = \Config\Services::request()->getGet();
        ///echo $ggg;
        //echo 'ddd';
        //$response = \Config\Services::response();
        //$response->redirect('http://google.com/');
    }

    public function error404()
    {
        echo 'error 404';
    }

    public function error500()
    {
        echo 'error 500';
    }
}