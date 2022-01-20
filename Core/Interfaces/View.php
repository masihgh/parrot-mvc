<?php

namespace Core\Interfaces;
class View
{

   /**
    * Render a view file
    *
    * @param string $view  The view file
    * @param array $args  Associative array of data to display in the view (optional)
    *
    * @return void
    */
   public static function render($view, $args = [])
   {
      extract($args, EXTR_SKIP);

      $file = dirname(dirname(__DIR__)) . "/App/Views/$view";  // relative to Core directory

      if (is_readable($file)) {
         require $file;
      } else {
         throw new \Exception("$file not found");
      }
   }

   /**
    * Render a view template using Twig
    *
    * @param string $template  The template file
    * @param array $args  Associative array of data to display in the view (optional)
    *
    * @return void
    */
   public static function renderTemplate($template, $args = [])
   {
      static $twig = null;

      if ($twig === null) {
         $loader = new \Twig\Loader\FilesystemLoader(dirname(dirname(__DIR__)) . '/App/Views');
         $twig = new \Twig\Environment($loader/*, [
            'cache' => dirname(dirname(__DIR__)) . '/Cache/Views_cache',
         ]*/);
      }
      #array_push($args, []);
      $args2 = [
         'dir' => 'ddddddddddddddd'
      ];
      $args = array_merge($args, $args2);
      echo $twig->render($template, $args);
   }
}
