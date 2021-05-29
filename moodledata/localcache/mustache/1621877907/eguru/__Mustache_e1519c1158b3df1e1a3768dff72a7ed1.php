<?php

class __Mustache_e1519c1158b3df1e1a3768dff72a7ed1 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'capabilities.subscribe' section
        $value = $context->findDot('capabilities.subscribe');
        $buffer .= $this->sectionEabe1aed85a001f70ae89cd6314d7457($context, $indent, $value);

        return $buffer;
    }

    private function sectionAa9a01cf67c7c823b6a448332884799c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'clicktounsubscribe, mod_forum';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'clicktounsubscribe, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section47c219071701e54580e6727273d385de(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            title="{{#str}}clicktounsubscribe, mod_forum{{/str}}"
            data-targetstate="0"
        ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionAa9a01cf67c7c823b6a448332884799c($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '            data-targetstate="0"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3d35085280e8a97b3ec241425228b620(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'clicktosubscribe, mod_forum';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'clicktosubscribe, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA1bcfef79bd7dfcb6c00e42a90570271(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'unsubscribediscussion, forum';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'unsubscribediscussion, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section24657a2f5c3aa3b4f5fcbb9d60376a90(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#str}}unsubscribediscussion, forum{{/str}}
        ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionA1bcfef79bd7dfcb6c00e42a90570271($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section53e320971a6242e13cf0552e5154a747(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'subscribediscussion, forum';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'subscribediscussion, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEabe1aed85a001f70ae89cd6314d7457(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <a
        href="{{{urls.subscribe}}}"
        class="dropdown-item"
        role="menuitem"
        data-type="subscription-toggle"
        data-action="toggle"
        data-discussionid="{{id}}"
        data-forumid="{{forumid}}"
        {{#userstate.subscribed}}
            title="{{#str}}clicktounsubscribe, mod_forum{{/str}}"
            data-targetstate="0"
        {{/userstate.subscribed}}
        {{^userstate.subscribed}}
            title="{{#str}}clicktosubscribe, mod_forum{{/str}}"
            data-targetstate="1"
        {{/userstate.subscribed}}
    >
        {{#userstate.subscribed}}
            {{#str}}unsubscribediscussion, forum{{/str}}
        {{/userstate.subscribed}}
        {{^userstate.subscribed}}
            {{#str}}subscribediscussion, forum{{/str}}
        {{/userstate.subscribed}}
    </a>
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <a
';
                $buffer .= $indent . '        href="';
                $value = $this->resolveValue($context->findDot('urls.subscribe'), $context);
                $buffer .= $value;
                $buffer .= '"
';
                $buffer .= $indent . '        class="dropdown-item"
';
                $buffer .= $indent . '        role="menuitem"
';
                $buffer .= $indent . '        data-type="subscription-toggle"
';
                $buffer .= $indent . '        data-action="toggle"
';
                $buffer .= $indent . '        data-discussionid="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '        data-forumid="';
                $value = $this->resolveValue($context->find('forumid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                // 'userstate.subscribed' section
                $value = $context->findDot('userstate.subscribed');
                $buffer .= $this->section47c219071701e54580e6727273d385de($context, $indent, $value);
                // 'userstate.subscribed' inverted section
                $value = $context->findDot('userstate.subscribed');
                if (empty($value)) {
                    
                    $buffer .= $indent . '            title="';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->section3d35085280e8a97b3ec241425228b620($context, $indent, $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '            data-targetstate="1"
';
                }
                $buffer .= $indent . '    >
';
                // 'userstate.subscribed' section
                $value = $context->findDot('userstate.subscribed');
                $buffer .= $this->section24657a2f5c3aa3b4f5fcbb9d60376a90($context, $indent, $value);
                // 'userstate.subscribed' inverted section
                $value = $context->findDot('userstate.subscribed');
                if (empty($value)) {
                    
                    $buffer .= $indent . '            ';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->section53e320971a6242e13cf0552e5154a747($context, $indent, $value);
                    $buffer .= '
';
                }
                $buffer .= $indent . '    </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
