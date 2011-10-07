<?php  
  

class MailchimpHelper extends AppHelper { 


var $helpers = array ('Html'); 

var $tags = array( 
        'ul' => '<ul%s>%s</ul>', 
        'ol' => '<ol%s>%s</ol>', 
        'li' => '<li%s>%s</li>', 
    ); 
     
/***FOR RETURNING LISTS and parsing the 'id' of a list to a particular URL****/ 
    function linkedList($list, $link, $attributes = array(), $itemAttributes = array(), $tag = 'ul') { 
        if(is_string($list)) { 
        //if an error occured 
             return $list; 
             exit; 
        } 
        if (is_string($attributes)) { 
            $tag = $attributes; 
            $attributes = array(); 
        } 
        $items = $this->__linkedListItem($list, $link); 
        return sprintf($this->tags[$tag], $this->_parseAttributes($attributes, null, ' ', ''), $items); 
    } 
     
        function __linkedListItem($items, $link) { 
        $out = ''; 
        $index = 1; 
        foreach($items as $key) { 
            $out .= '<li><a href="' . $link . $key['id']. '">' . $key['name'] . '(' . $key['member_count'] . ')' . '</a></li>'; 
            $index++; 
        } 
        return $out; 
    } 
     
/***FOR RETURNING MEMBERS FOR LIST and parsing the 'id' of a list to a particular URL****/ 
    function linkedMembersList($list, $id, $link, $attributes = array(), $itemAttributes = array(), $tag = 'ul') { 
        if(is_string($list)) { 
        //if an error occured 
             return $list; 
             exit; 
        } 
        if (is_string($attributes)) { 
            $tag = $attributes; 
            $attributes = array(); 
        } 
        $items = $this->__linkedMembersListItem($list, $id, $link); 
        return sprintf($this->tags[$tag], $this->_parseAttributes($attributes, null, ' ', ''), $items); 
    } 
     
        function __linkedMembersListItem($items,$id, $link) { 
        $out = ''; 
        $index = 1; 
        foreach($items as $key) { 
            $out .= '<li>' . $index . '    '  . $key['email'] . '<a href="' . $link . $key['email'] . '/' . $id . '"><span class="mc_remove">' . '  Remove from List  ' . '</span></a></li>'; 
            $index++; 
        } 
        return $out; 
    } 
     

} 

?> 