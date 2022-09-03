<?php

abstract class AbstractPageTemplate
{
  protected final function template()
  {
    $result = '';
    $result .= $this->header();
    $result .= $this->article();
    $result .= $this->footer();

    return $result;
  }

  abstract function header();
  abstract function article();
  abstract function footer();

  public function render()
  {
    return $this->template();
  }
}

class TextPage extends AbstractPageTemplate
{
  function header()
  {
    return "헤더<br>";
  }

  function article()
  {
    return "아티클<br>";
  }

  function footer()
  {
    return "푸터<br>";
  }
}

class HtmlPage extends AbstractPageTemplate
{
  function header()
  {
    return "<header>헤더</header><br>";
  }

  function article()
  {
    return "<article>아티클</article><br>";
  }

  function footer()
  {
    return "<footer>푸터</footer><br>";
  }

  public function render()
  {
    $result = '';
    $result .= '<div style="color:red">';
    $result .= $this->template();
    $result .= '</div>';

    return $result;
  }
}

echo '<h1>Text</h1>';
$text = new TextPage();
echo $text->render();

echo '<br><br>';

echo '<h1>Html</h1>';
$html = new HtmlPage();
echo $html->render();