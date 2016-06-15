<?php
/**
 * Created by PhpStorm.
 * User: Sam Salvail
 * Date: 2016-02-11
 * Time: 2:41 PM
 */
if (!defined('APPPATH'))
    exit('No direct script access allowed');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>ArtsVista WebScraper {title}</title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://bootswatch.com/yeti/bootstrap.min.css">
    </head>
    <body>
        <div class = "navbar navbar-default">
            <div class = "navbar-header">
                <!-- toggle icon -->
                <button type = "button" class = "navbar-toggle" data-toggle = "collapse" data-target = "#myNavbar">
                    <span class = "icon-bar"></span>
                    <span class = "icon-bar"></span>
                    <span class = "icon-bar"></span>
                </button>
            </div>
            <!-- menu -->
            <div class = "collapse navbar-collapse" id = "myNavbar">
                <div class="navbar-header" style="color: white">
                    <h4>{title}</h4>
                </div>
                <ul class = "nav navbar-nav pull-right" id="menu">
                    {menu}
                </ul>
            </div>
        </div>

        <div>
            <div class="col-md-2">
                {left}
            </div>
            <div class="col-md-8">
                <div id="content">
                    <h1>{title}</h1>
                    {content}
                </div>
            </div>
            <div class="col-md-2">
                {right}
            </div>
            <div class="col-md-12 modal-footer">
                <div class = "container">
                    Copy Right HsuanWei Fu
                </div>
            </div>
        </div>
    </body>
</html>