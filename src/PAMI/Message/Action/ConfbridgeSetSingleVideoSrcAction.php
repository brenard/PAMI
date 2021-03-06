<?php
/**
 * ConfbridgeSetSingleVideoSrc Action
 *
 *
 *
 * Note: Auto Generated using xsltproc
 *
 * PHP Version 5
 *
 * @category   Pami
 * @package    Message
 * @subpackage Action
 * @author     Marcelo Gornstein <marcelog@gmail.com>
 * @author     Diederik de Groot <ddegroot@gmail.com>
 * @license    http://github.com/chan-sccp/PAMI/LICENSE
 * @version    SVN: $Id$
 * @link       http://marcelog.github.com/PAMI/
 *
 * Copyright 2011 Marcelo Gornstein <marcelog@gmail.com>
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
namespace PAMI\Message\Action;

/**
 * ConfbridgeSetSingleVideoSrc Action
 *
 * Note: Auto Generated using xsltproc
 */
class ConfbridgeSetSingleVideoSrcAction extends ActionMessage
{
    /**
     * Constructor.
     *
     * @param string $conference
     *
     *
     * @param string $channel
     *        If this parameter is not a complete channel name, the first channel with this prefix will be used.
     *
     * @return void
     */
    public function __construct($conference, $channel)
    {
        parent::__construct('ConfbridgeSetSingleVideoSrc');
        $this->setKey('Conference', $conference);
        $this->setKey('Channel', $channel);
    }
}
