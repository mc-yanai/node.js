<?php

// ���炩���ߒ�`����Ă���Composer Recipe���g���܂��B
require 'recipe/composer.php';

// �f�v���C��̃T�[�o���`���܂��B
// �T�[�o�����uprod�v�Ƃ��ASSH��22�ԃ|�[�g���g�p���܂��B
server('prod', '192.168.100.243', 22)
    ->user('yanai')
    ->password('koluku871')
    // ssh agent���g���F�؂��܂��B
    ->forwardAgent()
    ->stage('production')
    ->env('branch', 'deployer_test')
    // �f�v���C��̃x�[�X�p�X���`���܂��B
    ->env('deploy_path', '/var/www/yanai/Shogi/node');

// Git���|�W�g����ݒ肵�܂��B�T�[�o���git���K�v�ł��B
set('repository', 'https://mc-yanai@github.com/mc-yanai/node.js.git');