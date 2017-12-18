<?php

namespace RndPwd;

class RandomPassword
{

    public static function generateRandomPassword(int $length = 12, $pool = ' !"#$%&\'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\\]^_`abcdefghijklmnopqrstuvwxyz{|}~')
    {
        if (is_string($pool)) {
            $pool = \str_split($pool);
        }
        $password   = '';
        $poolLength = \count($pool) - 1;
        for ($iterator = 0; $iterator < $length; $iterator++) {
            $password .= $pool[\random_int(0, $poolLength)];
        }

        return $password;
    }

    public static function generateRandomPasswordUntypable(int $length = 12)
    {
        $pool = ' !"#$%&\'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\\]^_`abcdefghijklmnopqrstuvwxyz{|}~ ■²ⁿ√·∙°≈÷⌡⌠≤≥±≡∩εφ∞δΩΘΦτµσΣπΓßα▀▐▌▄█┌┘╪╫╓╒╘╙╥╤╨←╬═╠╦╩╔╚╟╞┼─├┬┴└┐╛╜╝╗║╣╕╖╢╡┤│▓▒░»«¡¼½¬⌐¿ºªÑñúóíáƒ₧¥£¢ÜÖÿùûòöôÆæÉÅÄìîïèëêçåàäâéüÇ⌂';

        return static::generateRandomPassword($length, $pool);
    }

}
