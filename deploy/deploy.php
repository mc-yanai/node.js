<?php

// あらかじめ定義されているComposer Recipeを使います。
require 'recipe/composer.php';

// デプロイ先のサーバを定義します。
// サーバ名を「prod」とし、SSHは22番ポートを使用します。
server('prod', '192.168.100.243', 22)
    ->user('yanai')
    ->password('koluku871')
    // ssh agentを使い認証します。
    ->forwardAgent()
    ->stage('production')
    ->env('branch', 'deployer_test')
    // デプロイ先のベースパスを定義します。
    ->env('deploy_path', '/var/www/yanai/Shogi/node');

// Gitリポジトリを設定します。サーバ上にgitが必要です。
set('repository', 'https://mc-yanai@github.com/mc-yanai/node.js.git');