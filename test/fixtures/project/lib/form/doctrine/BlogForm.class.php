<?php

/**
 * Blog form.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class BlogForm extends BaseBlogForm
{
  public function configure()
  {
    unset(
      $this['slots_list']
    );
  }
}
