<?php

class TestConfig {
    /**
     * 点击事件1
     */
    const CLICK_EVENT_1 = 101;
    /**
     * 2 点击事件 2
     */
    const CLICK_EVENT_2 = 102;
    /**
     * 点击事件3 click
     * btn
     */
    const CLICK_EVENT_3 = 103;

    protected function getDocDescription(string $constant): string
    {
        return preg_replace('#[\*\s]*(^/|/$)[\*\s]*#', '', (new ReflectionClassConstant(static::class, $constant))->getDocComment());
    }

    public function getConstantsDoc()
    {
        $constants = (new ReflectionClass(static::class))->getConstants();
        foreach ($constants as $constant => $code) {
            $description = $this->getDocDescription($constant);
            echo "constant: {$constant}, code: {$code}, description: {$description}\n";
        }
    }
}

(new TestConfig())->getConstantsDoc();

// 通过反射获取常量的注释
//
// output:
// constant: CLICK_EVENT_1, code: 101, description: 点击事件1
// constant: CLICK_EVENT_2, code: 102, description: 2 点击事件 2
// constant: CLICK_EVENT_3, code: 103, description: 点击事件3 click
//      * btn