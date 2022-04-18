<?php
    namespace Grav\Plugin;

    use Grav\Common\Plugin;
    use Grav\Plugin\Admin\Admin;

    class NykAuthorsPlugin extends Plugin {
        public static function getSubscribedEvents() {
            return [
                'onAdminSave' => ['addAuthorsNamesToPage', 0],
            ];
        }

        public function addAuthorsNamesToPage($event) {
            $page = $event['object'];
        }
    } 
?>