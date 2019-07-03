<?php
/**
 * Category
 *
 * PHP version 5
 *
 * @category Class
 * @package  Inspetor\Model
 * @author   Inspetor Team
 */

/**
 * Inspetor Antifraud
 *
 * This is an antifraud product developed to analyzes transactions and identify frauds using trackers and analytics tools. This file must explain every request and parametes that a library must provide to a client.
 */

namespace Inspetor\Model;

use Inspetor\Exception\ModelException\CategoryException;
use Inspetor\Model\AbstractModel;
use JsonSerializable;

class Category extends AbstractModel implements JsonSerializable {

    /**
     * PROPERTIES
     */

    /**
     * @param string
     */
    private $id;

     /**
     * @param string
     */
    private $name;

    /**
     * @param string
     */
    private $slug;

    /**
     * @param boolean
     */
    private $is_public;

    /**
     * Validate Category instance
     *
     * @return void
     */
    public function isValid() {
        if (!$this->id) {
            throw new CategoryException(7001);
        }

        if (!$this->name) {
            throw new CategoryException(7002);
        }

        if (!$this->slug) {
            throw new CategoryException(7003);
        }

        if (!$this->is_public) {
            throw new CategoryException(7004);
        }
    }

    /**
     * SETTERS AND GETTERS
     */

    /**
     * Get the value of Id
     *
     *
     * @return string
     **/
    public function getId() {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param string $id
     *
     * @return  self
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * Get the value of name
     *
     * @return string
     **/
    public function getName() {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param string $name
     *
     * @return  self
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * Get the value of slug
     *
     * @return string
     **/
    public function getSlug() {
        return $this->slug;
    }

    /**
     * Set the value of slug
     *
     * @param string $slug
     *
     * @return  self
     */
    public function setSlug($slug) {
        $this->slug = $slug;
        return $this;
    }

    /**
     * Get the value of is_public
     *
     * @return boolean
     **/
    public function getIsPublic() {
        return $this->is_public;
    }

    /**
     * Set the value of is_public
     *
     * @param boolean $is_public
     *
     * @return  self
     */
    public function setIsPublic($is_public) {
        $this->is_public = $is_public;
        return $this;
    }

    /**
     * JSONSERIALIZE
    */

    /**
     * Create a json with the data from the object
     * @return array
    */
    public function jsonSerialize() {
        $array = [
            "category_id"        => $this->encodeData($this->getId()),
            "category_name"      => $this->encodeData($this->getName()),
            "category_slug"      => $this->encodeData($this->getSlug()),
            'category_is_public' => $this->encodeData($this->getIsPublic())
        ];

        return $array;
    }

}


?>