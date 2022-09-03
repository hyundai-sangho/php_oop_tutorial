<?php

abstract class AbstractPageTemplate
{
  private final function template()
  {
    $result = '';
    $result .= $this->header();
    $result .= $this->article();
    $result .= $this->footer();

    return $result;
  }

  public function render()
  {
    return $this->template();
  }

  abstract protected function header();
  abstract protected function article();
  abstract protected function footer();
}

class TextPage extends AbstractPageTemplate
{
  protected function header()
  {
    return "PHP\n";
  }

  protected function article()
  {
    return "PHP: Hypertext Preprocessor\n";
  }

  protected function footer()
  {
    return "website is php.net";
  }
}

class HtmlPage extends AbstractPageTemplate
{
  protected function header()
  {
    ob_start();
?>
<header>
  <h1>PHP</h1>
</header>
<?php

    return ob_get_clean();
  }

  protected function article()
  {
    ob_start();
  ?>
<article>PHP: Hypertext Preprocessor</article>
<?php
    return ob_get_clean();
  }

  protected function footer()
  {
    ob_start();
  ?>
<footer><a href="https://php.net">php.net</a></footer>
<?php
    return ob_get_clean();
  }

  public function render()
  {
    $result = '<html>';
    $result = '<body style="color:red">';
    $result .= parent::render();
    $result .= '</body>';
    $result .= '</html>';
    return $result;
  }
}

$html = new HtmlPage();
echo $html->render();

echo '<br>';
echo '<br>';

// $text = new TextPage();
// echo $text->render();