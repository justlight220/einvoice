<?php 
/*
 * Copyright 2015 Pichu Chen, TIH
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */

namespace PichuChen\einvoice;

class SocialWelfareDetailItem{
  private $rowNum = '';
  private $loveCode = '';
  private $socialWelfareBAN = '';
  private $socialWelfareName = '';
  private $socialWelfareAbbrev = '';

  function __construct($data){
    $this->rowNum = $data['rowNum'];
    $this->loveCode = $data['LoveCode'];
    $this->socialWelfareBAN = $data['SocialWelfareBAN'];
    $this->socialWelfareName = $data['SocialWelfareName'];
    $this->socialWelfareAbbrev = isset($data['SocialWelfareAbbrev']) ? $data['SocialWelfareAbbrev'] : '' ;
  }

  function getRowNum() {return $this->rowNum;}
  function getLoveCode() {return $this->loveCode;}
  function getSocialWelfareBAN() {return $this->socialWelfareBAN;}
  function getSocialWelfareName() {return $this->socialWelfareName;}
  function getSocialWelfareAbbrev() {return $this->socialWelfareAbbrev;}

}
