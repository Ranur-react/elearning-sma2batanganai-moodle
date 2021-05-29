<?php

class __Mustache_95de896458fdd70229e505e231ff8846 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('mod_forum/discussion_list')) {
            $context->pushBlockContext(array(
                'discussion_create_text' => array($this, 'blockAf29660e08569f138334097d3185c00b'),
                'no_discussions_text' => array($this, 'blockCf32a376b15164ba9c9cbef7aad15fba'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }

    private function section920b16acde3084a67e9c6474e9b9a3dc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'addanewquestion, forum';
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
                
                $buffer .= 'addanewquestion, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC2acaa70a42c1f1844701645fd0fbf22(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'noquestions, forum';
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
                
                $buffer .= 'noquestions, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function blockAf29660e08569f138334097d3185c00b($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '        ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section920b16acde3084a67e9c6474e9b9a3dc($context, $indent, $value);
        $buffer .= '
';
    
        return $buffer;
    }

    public function blockCf32a376b15164ba9c9cbef7aad15fba($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '        (';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionC2acaa70a42c1f1844701645fd0fbf22($context, $indent, $value);
        $buffer .= ')
';
    
        return $buffer;
    }
}
