<?

/***** This code is autogenerated by the "genposts.php" script.  Do not hand modify this code! *****/

$posts_order = []; $posts = [];
$posts_order["slim-wildcard-routes-last-but-not-least"] = 20;
$posts[20] = new Post("Slim wildcard routes : Last but not least", "slim-wildcard-routes-last-but-not-least", \Carbon\Carbon::createFromTimestamp(1344051057));
$posts_order["slim-wildcard-routes-improved"] = 19;
$posts[19] = new Post("Slim wildcard routes improved", "slim-wildcard-routes-improved", \Carbon\Carbon::createFromTimestamp(1341372657));
$posts_order["multilingual-site-using-slim"] = 18;
$posts[18] = new Post("Multilingual site using Slim", "multilingual-site-using-slim", \Carbon\Carbon::createFromTimestamp(1340767857));
$posts_order["slim-wildcard-routes-via-route-middleware"] = 17;
$posts[17] = new Post("Slim wildcard routes via route middleware", "slim-wildcard-routes-via-route-middleware", \Carbon\Carbon::createFromTimestamp(1340076657));
$posts_order["PHP-on-a-diet-up-and-running-with-slim"] = 16;
$posts[16] = new Post("PHP on a diet : Up and running with Slim", "PHP-on-a-diet-up-and-running-with-slim", \Carbon\Carbon::createFromTimestamp(1339212657));
$posts_order["a-quick-microbenchmark-update-PHP-5-4"] = 15;
$posts[15] = new Post("A \"quick\" microbenchmark update PHP 5.4", "a-quick-microbenchmark-update-PHP-5-4", \Carbon\Carbon::createFromTimestamp(1337916657));
$posts_order["a-quick-microbenchmark"] = 14;
$posts[14] = new Post("A \"quick\" microbenchmark", "a-quick-microbenchmark", \Carbon\Carbon::createFromTimestamp(1328761857));
$posts_order["CoffeeScript-why-is-function-binding-not-the-default"] = 13;
$posts[13] = new Post("CoffeeScript : Why is function binding not the default?", "CoffeeScript-why-is-function-binding-not-the-default", \Carbon\Carbon::createFromTimestamp(1327120257));
$posts_order["sidney-crosby-art-ross-watch-mynhl"] = 12;
$posts[12] = new Post("Fun Play 2.0 project launch : Sidney Crosby Art Ross Watch and My NHL", "sidney-crosby-art-ross-watch-mynhl", \Carbon\Carbon::createFromTimestamp(1322627457));
$posts_order["play-2-morphia-logging-error"] = 11;
$posts[11] = new Post("Using morphia with Play 2.0 and the sl4j logging error", "play-2-morphia-logging-error", \Carbon\Carbon::createFromTimestamp(1322541057));
$posts_order["now-running-on-play-2-beta"] = 10;
$posts[10] = new Post("This blog is now running on Play 2.0 BETA", "now-running-on-play-2-beta", \Carbon\Carbon::createFromTimestamp(1322022657));
$posts_order["play-framework-accesslog"] = 9;
$posts[9] = new Post("Play framework accesslog module update", "play-framework-accesslog", \Carbon\Carbon::createFromTimestamp(1321504257));
$posts_order["my-father-son-relationship"] = 8;
$posts[8] = new Post("My Father Son relationship: a speech to my Dad on his 70th birthday", "my-father-son-relationship", \Carbon\Carbon::createFromTimestamp(1319599857));
$posts_order["play-framework-sample-app-JWebUnit-synchronous-ajax"] = 7;
$posts[7] = new Post("Play framework sample application with JWebUnit and synchronous ajax", "play-framework-sample-app-JWebUnit-synchronous-ajax", \Carbon\Carbon::createFromTimestamp(1318822257));
$posts_order["how-much-code-do-you-read"] = 6;
$posts[6] = new Post("How much code do you read?", "how-much-code-do-you-read", \Carbon\Carbon::createFromTimestamp(1318390257));
$posts_order["day-1-of-my-move-to-a-stand-up-desk"] = 5;
$posts[5] = new Post("Day 1 of my move to a stand-up desk", "day-1-of-my-move-to-a-stand-up-desk", \Carbon\Carbon::createFromTimestamp(1317699057));
$posts_order["why-and-how-i-will-switch-to-a-stand-up-desk"] = 4;
$posts[4] = new Post("Why and How I will switch to a stand-up desk", "why-and-how-i-will-switch-to-a-stand-up-desk", \Carbon\Carbon::createFromTimestamp(1316748657));
$posts_order["cobertura-module-tricks-with-the-play-framework"] = 3;
$posts[3] = new Post("Tricks for using the cobertura module with the Play Framework", "cobertura-module-tricks-with-the-play-framework", \Carbon\Carbon::createFromTimestamp(1316575857));
$posts_order["ansi-colour-support-for-play-framework-2-preview"] = 2;
$posts[2] = new Post("ANSI colour support in Windows for the Play! Framework 2.0 preview", "ansi-colour-support-for-play-framework-2-preview", \Carbon\Carbon::createFromTimestamp(1315625457));
$posts_order["windows-support-for-play-framework-2-preview"] = 1;
$posts[1] = new Post("Adding initial Windows support for the Play! Framework 2.0 preview", "windows-support-for-play-framework-2-preview", \Carbon\Carbon::createFromTimestamp(1315539057));
$posts_order["carpenters-house-last-to-get-attention"] = 0;
$posts[0] = new Post("A carpenter's house is always the last to get the attention it deserves", "carpenters-house-last-to-get-attention", \Carbon\Carbon::createFromTimestamp(1315452657));

/***** This code is autogenerated by the "genposts.php" script.  Do not hand modify this code! *****/

interface IPosts {
   public function findAll();
   public function findBySlug($slug);
   public function next(Post $post);
   public function prev(Post $post);
}

class Posts implements IPosts {
   // [#] => Post
   private $posts;

   // [slug] => #
   private $posts_order;

   public function __construct(array $posts_order, array $posts) {
      $this->posts_order = $posts_order;
      $this->posts = $posts;
   }

   public function findAll() {
      return $this->posts;
   }

   public function findBySlug($slug) {
      if (!array_key_exists($slug, $this->posts_order)) {
         return null;
      }

      $i = $this->posts_order[$slug];

      return array_key_exists($i, $this->posts) ? $this->posts[$i] : null;
   }

   public function next(Post $post) {
      if (!array_key_exists($post->slug, $this->posts_order)) {
         return null;
      }

      $i = $this->posts_order[$post->slug];

      return (++$i < count($this->posts)) ? $this->posts[$i] : null;
   }

   public function prev(Post $post) {
      if (!array_key_exists($post->slug, $this->posts_order)) {
         return null;
      }

      $i = $this->posts_order[$post->slug];

      return (--$i > 0) ? $this->posts[$i] : null;
   }
}

$posts = new Posts($posts_order, $posts);