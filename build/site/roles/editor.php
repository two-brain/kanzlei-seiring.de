<?php

return [
  'id'          => 'editor',
  'name'        => 'Editor',
  'permissions' => [
    '*'                 => true,
    'panel.site.update' => true,
    'panel.avatar.*'    => function() {
      return $this->user()->is($this->target()->user());
    },
    'panel.user.*'      => false,
    'panel.user.read'   => true,
    'panel.user.update' => function() {
      return $this->user()->is($this->target()->user());
    }
  ]
];
