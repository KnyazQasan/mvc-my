<?php
/**
 * @package     Arastta eCommerce
 * @copyright   2015-2018 Arastta Association. All rights reserved.
 * @copyright   See CREDITS.txt for credits and other copyright notices.
 * @license     GNU GPL version 3; see LICENSE.txt
 * @link        https://arastta.org
 */

class ControllerHeader extends Controller
{
    
    public function index()
    {
        $data['title'] = $this->document->getTitle();
        $data['description'] = $this->document->getDescription();
        $data['links'] = $this->document->getLinks();
        $data['styles'] = $this->document->getStyles();
        $data['scripts'] = $this->document->getScripts();
        
        if ($this->request->server['HTTPS']) {
            $server = HTTPS_SERVER;
        } else {
            $server = HTTP_SERVER;
        }

        $data['base'] = $server;

        return $this->load->view('header.tpl', $data);
    }
}
