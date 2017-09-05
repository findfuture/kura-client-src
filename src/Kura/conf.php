<?php

    /*
     * 库拉客户端配置
     */

    $conf = array();
    
    //SOA地址
    $conf['SOA']     = 'xxx';
    //SOA密钥
    $conf['SOAKEY']  = 'xxx';
    //项目名称，例如：xxx
    $conf['PRONAME'] = 'xxx';
    //项目地址，例如：http://www.xxx.com/
    $conf['PROURL']  = 'xxx';
    //开发环境,0：测试，1：生产
    $conf['ONLINE']  = 0;
    //默认实例ID
    $conf['EXAMPLE'] = 0;
    //平台 web/wap
    $conf['CLIENT']  = 'web';
    //开发者账号
    $conf['UNAME']   = 'xxx';
    //开发者密码
    $conf['PWORD']   = 'xxx';
	//缓存配置，支持file、redis
    $conf['CACHE']   = 'file';
    //REDIS地址
    $conf['HOST']    = 'xxx.xxx.xxx.xxx';
    //REDIS端口
    $conf['PORT']    = '6379';
    //REDIS密码
    $conf['PASS']    = '';
    //REDIS前缀
    $conf['PREFIX']  = '';
    //默认缓存时长,单位秒
    $conf['CACHETIMEOUT'] = 600;
    
    return $conf;