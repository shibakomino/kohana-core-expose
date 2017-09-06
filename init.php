<?php
/*
 * if submodule core-expose installed, expose X-Powered-By.
 * TODO, push the header to HTTP Headers.
 * for example.. current response add header.
 * EVENT_SEND_HEADER;
if (Kohana::getExpose() AND ! isset($headers['x-powered-by']))
{
  $processed_headers[] = 'X-Powered-By: '.Kohana::version();
}*/


//Kohana_Request->render() :: EVENT_RENDER
// If Kohana expose, set the user-agent
/*
if (Kohana::$expose)
{
  $this->headers('user-agent', Kohana::version());
}
*/


/* Kohana Response -> render :: EVENT_RENDER */
// If Kohana expose, set the user-agent
/*if (Kohana::$expose)
{
  $this->headers('user-agent', Kohana::version());
}*/

/*
 *
 * */