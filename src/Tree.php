<?php

declare(strict_types=1);
/**
 * #logic 做事不讲究逻辑，再努力也只是重复犯错
 * ## 何为相思：不删不聊不打扰，可否具体点：曾爱过。何为遗憾：你来我往皆过客，可否具体点：再无你。.
 *
 * @version 1.0.0
 * @author @小小只^v^ <littlezov@qq.com>  littlezov@qq.com
 * @contact  littlezov@qq.com
 * @link     https://github.com/littlezo
 * @document https://github.com/littlezo/wiki
 * @license  https://github.com/littlezo/MozillaPublicLicense/blob/main/LICENSE
 *
 */
namespace littler;

class Tree
{
    public static function done(array $items, $pid = 0, $pidField = 'parent', $children = 'children')
    {
        $tree = [];

        foreach ($items as $key => $item) {
            if ($item[$pidField] == $pid) {
                $child = self::done($items, $item['id'], $pidField);
                if (count($child)) {
                    $item[$children] = $child;
                }
                $tree[] = $item;
            }
        }

        return $tree;
    }
}
