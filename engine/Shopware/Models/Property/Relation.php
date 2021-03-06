<?php
/**
 * Shopware 4.0
 * Copyright © 2012 shopware AG
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * "Shopware" is a registered trademark of shopware AG.
 * The licensing of the program under the AGPLv3 does not imply a
 * trademark license. Therefore any rights, title and interest in
 * our trademarks remain entirely with us.
 *
 * @category   Shopware
 * @package    Shopware_Models
 * @subpackage Property
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author     $Author$
 */

namespace Shopware\Models\Property;

use Shopware\Components\Model\ModelEntity,
Doctrine\ORM\Mapping AS ORM,
Doctrine\Common\Collections\ArrayCollection;

/**
 * Shopware Article Model
 *
 * @ORM\Entity
 * @ORM\Table(name="s_filter_relations")
 */
class Relation extends ModelEntity
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * The resource property is the owning side of the association between relation and group.
     *
     * @var $group \Shopware\Models\Property\Group
     * @ORM\ManyToOne(targetEntity="\Shopware\Models\Property\Group")
     * @ORM\JoinColumn(name="groupID", referencedColumnName="id", nullable=true)
     */
    private $group;

    /**
     * @ORM\Column(name="groupID", type="integer", nullable=true)
     * @var int $groupid
     */
    private $groupid;

    /**
     * The resource property is the owning side of the association between relation and option.
     *
     * @var $group \Shopware\Models\Property\Option
     * @ORM\ManyToOne(targetEntity="\Shopware\Models\Property\Option")
     * @ORM\JoinColumn(name="optionID", referencedColumnName="id", nullable=true)
     */
    private $option;


    /**
     * @ORM\Column(name="optionID", type="integer", nullable=true)
     * @var int $optionId
     */
    private $optionId;

    /**
     * @var integer $position
     *
     * @ORM\Column(name="position", type="integer", nullable=false)
     */
    private $position;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param \Shopware\Models\Property\Option $option
     */
    public function setOption($option)
    {
        $this->option = $option;
    }

    /**
     * @return \Shopware\Models\Property\Option
     */
    public function getOption()
    {
        return $this->option;
    }

    /**
     * @param \Shopware\Models\Property\Group $group
     */
    public function setGroup($group)
    {
        $this->group = $group;
    }

    /**
     * @return \Shopware\Models\Property\Group
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * @param int $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }
}
