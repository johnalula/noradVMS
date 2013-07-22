<?php
// auto-generated by sfViewConfigHandler
// date: 2013/07/22 17:28:44
$response = $this->context->getResponse();


  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());



  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);

  $response->addStylesheet('ui-style.css', '', array ());
  $response->addStylesheet('layout-default-latest.css', '', array ());
  $response->addStylesheet('main.css', '', array ());
  $response->addStylesheet('layout.css', '', array ());
  $response->addStylesheet('jquery.treeview.css', '', array ());
  $response->addStylesheet('/datatables/media/css/demo_table.css', '', array ());
  $response->addStylesheet('login.css', '', array ());
  $response->addStylesheet('redmond.calendars.picker.css', '', array ());
  $response->addStylesheet('smoothness/jquery-ui-1.8.21.custom.css', '', array ());
  $response->addStylesheet('css/redmond/jquery-ui-1.9.0.custom.css', '', array ());
  $response->addStylesheet('styles.css', '', array ());
  $response->addStylesheet('list.css', '', array ());
  $response->addStylesheet('print', '', array (  'media' => 'print',));
  $response->addJavascript('tree/jquery.js', '', array ());
  $response->addJavascript('jquery-latest.js', '', array ());
  $response->addJavascript('jquery.tools.min.js', '', array ());
  $response->addJavascript('jquery.layout-latest.js', '', array ());
  $response->addJavascript('jquery-ui-1.8.21.custom.min.js', '', array ());
  $response->addJavascript('dialog.js', '', array ());
  $response->addJavascript('jquery.mousewheel.js', '', array ());
  $response->addJavascript('jquery.scrollpane.js', '', array ());
  $response->addJavascript('/datatables/media/js/jquery.dataTables.js', '', array ());
  $response->addJavascript('layout.js', '', array ());
  $response->addJavascript('accordion.js', '', array ());
  $response->addJavascript('scrollbar.js', '', array ());
  $response->addJavascript('tree/jquery.cookie.js', '', array ());
  $response->addJavascript('tree/jquery.treeview.js', '', array ());
  $response->addJavascript('tree/demo.js', '', array ());
  $response->addJavascript('calendar/jquery.calendars.js', '', array ());
  $response->addJavascript('calendar/jquery.calendars.plus.js', '', array ());
  $response->addJavascript('calendar/jquery.calendars.picker.js', '', array ());
  $response->addJavascript('calendar/jquery.calendars.ethiopian-am.js', '', array ());
  $response->addJavascript('calendar/jquery.calendars.ethiopian.js', '', array ());
  $response->addJavascript('calendar/amharicdate.js', '', array ());
  $response->addJavascript('redmond/js/jquery-1.8.2.js', '', array ());
  $response->addJavascript('redmond/js/jquery-ui-1.9.0.custom.js', '', array ());
  $response->addJavascript('checkbox.js', '', array ());
  $response->addJavascript('slider.js', '', array ());


