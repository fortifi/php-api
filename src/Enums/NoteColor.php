<?php
namespace Fortifi\Api\V1\Enums;

final class NoteColor
{
  const BLUE = 'blue';
  const RED = 'red';
  const ORANGE = 'orange';
  const YELLOW = 'yellow';
  const INDIGO = 'indigo';
  const VIOLET = 'violet';
  const GREEN = 'green';
  const PINK = 'pink';
  const GREY = 'grey';

  public static function getDisplayValue($value)
  {
    return ucfirst($value);
  }

  public static function getValues()
  {
    return [
      'blue',
      'red',
      'orange',
      'yellow',
      'indigo',
      'violet',
      'green',
      'pink',
      'grey',
    ];
  }

  public static function isValid($value)
  {
    return in_array($value, static::getValues());
  }
}
      
