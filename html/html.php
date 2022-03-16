<?php

function doctype () {
    $objeto = new Strings;
    $doctype = $objeto->_createHeaderString('!DOCTYPE',['html']);
    echo $doctype;
}

function head ($content = null) {
    $obj = new Strings;
    $head = $obj->createHeaderString('head',[]);
    $_head = $obj->createHeaderString('head',[],1);
    echo $head;
        if ($content === null) {
            echo "<title>My Page</title>";
        } else {
            if (is_array($content)) {
                echo implode('',$content);
            } else {
                echo $content;
            }
        }
    echo $_head;
}

function mixedAttrList ($mixed = []) {
    $obj = new Strings;
    $attrsList = $obj->createAttrsMixedList($mixed);
    return $attrsList;
}

function mixAttrTag ($tag,$attrs,$or = 0) {
    if ($or === 1) {
        return "</{$tag}>";
    } else {
        $attrsList = call_user_func('mixedAttrList',$attrs);
        return "<{$tag}{$attrsList}>";
    }
}

function tag ($tag,$attrs = null,$content = null) {
    if ($attrs === null) {
        $tag_ = "<{$tag}>";
    } else {
        $tag_ = mixAttrTag($tag,$attrs);
    }
    $_tag = mixAttrTag($tag,null,1);
    if (is_array($content)) {
        $_content_ = implode('',$content);
    } else {
        $_content_ = $content;
    }
    return $tag_.$_content_.$_tag;
}

function body (array $atttributes = [],$content = null) {
    $obj = new Strings;
    $body = $obj->createHeaderString('body',$atttributes);
    $_body = $obj->createHeaderString('body',[],1);
    echo $body;
        if ($content === null) {
            echo "<h3>Hello World.</h3>";
        } else {
            if (is_array($content)) {
                echo implode('',$content);
            } else {
                echo $content;
            }
        }
    echo $_body;
}

function page ($headContent = null,$bodyContent = null,array $bodyAttrs = []) {
    call_user_func("doctype");
    $obj = new Strings;
    $html = $obj->createHeaderString('html',['lang'=>'en']);
    $_html = $obj->createHeaderString('html',[],1);
    echo $html;
        head($headContent);
        body($bodyAttrs,$bodyContent);
    echo $_html;
}
