<?php

class __Mustache_ce90746b312f3f5bb5b9562549db7260 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('mod_forum/discussion_favourite_toggle')) {
            $context->pushBlockContext(array(
                'classes' => array($this, 'blockCda60bd91631decc88ba2bf7b4d34c74'),
                'role' => array($this, 'block69d1b46e2111106881197fe9a9856466'),
                'favouritecontent' => array($this, 'block43e0e0d63264c7710427943761900c23'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }

    private function section7886e55de6404cd7009bb9e34c559672(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'removefromfavourites, mod_forum';
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
                
                $buffer .= 'removefromfavourites, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section51144ec137c004076d436a294f833e13(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/star, mod_forum, {{#str}}removefromfavourites, mod_forum{{/str}}';
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
                
                $buffer .= 't/star, mod_forum, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section7886e55de6404cd7009bb9e34c559672($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAbfc5f083e54c0348c1ad51be819bc2f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#pix}}t/star, mod_forum, {{#str}}removefromfavourites, mod_forum{{/str}}{{/pix}}
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
                
                $buffer .= '            ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section51144ec137c004076d436a294f833e13($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section25fd04774869002914ff7f1fa61234b9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'addtofavourites, mod_forum';
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
                
                $buffer .= 'addtofavourites, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFf6c3e33f1ed4ec858684e940297647d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/emptystar, core, {{#str}}addtofavourites, mod_forum{{/str}}';
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
                
                $buffer .= 't/emptystar, core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section25fd04774869002914ff7f1fa61234b9($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function blockCda60bd91631decc88ba2bf7b4d34c74($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'btn btn-link';
    
        return $buffer;
    }

    public function block69d1b46e2111106881197fe9a9856466($context)
    {
        $indent = $buffer = '';
        $buffer .= 'button';
    
        return $buffer;
    }

    public function block43e0e0d63264c7710427943761900c23($context)
    {
        $indent = $buffer = '';
        // 'userstate.favourited' section
        $value = $context->findDot('userstate.favourited');
        $buffer .= $this->sectionAbfc5f083e54c0348c1ad51be819bc2f($context, $indent, $value);
        // 'userstate.favourited' inverted section
        $value = $context->findDot('userstate.favourited');
        if (empty($value)) {
            
            $buffer .= $indent . '            ';
            // 'pix' section
            $value = $context->find('pix');
            $buffer .= $this->sectionFf6c3e33f1ed4ec858684e940297647d($context, $indent, $value);
            $buffer .= '
';
        }
    
        return $buffer;
    }
}
