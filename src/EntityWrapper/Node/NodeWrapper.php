<?php

/**
 * @file
 * Node wrapper class.
 */

namespace Drupal\entity_api_wrapper\EntityWrapper\Node;

use \EntityDrupalWrapper;

abstract class NodeWrapper extends EntityDrupalWrapper {
  protected $nodeProperties = array(
    'vid',
    'uid',
    'title',
    'log',
    'status',
    'comment',
    'promote',
    'sticky',
    'nid',
    'type',
    'language',
    'created',
    'changed',
    'tnid',
    'translate',
    'revision_timestamp',
    'revision_uid',
    'cid',
    'last_comment_timestamp',
    'last_comment_name',
    'last_comment_uid',
    'comment_count',
    'name',
    'picture',
    'data',
  );
  protected $nodeWrapper;

  function __construct($node) {
    $this->nodeWrapper = new EntityDrupalWrapper('node', $node);
  }

  public function getNodeProperties() {
    return $this->nodeProperties;
  }

  public function getVid() {
    return $this->nodeWrapper->vid->value();
  }

  public function setVid($vid) {
    $this->nodeWrapper->vid = $vid;
  }

  public function getUid() {
    return $this->nodeWrapper->uid->value();
  }

  public function setUid($uid) {
    $this->nodeWrapper->uid = $uid;
  }

  public function getTitle() {
    return $this->nodeWrapper->title->value();
  }

  public function setTitle($title) {
    $this->nodeWrapper->title = $title;
  }

  public function getLog() {
    return $this->nodeWrapper->log->value();
  }

  public function setLog($log) {
    $this->nodeWrapper->log = $log;
  }

  public function getStatus() {
    return $this->nodeWrapper->status->value();
  }

  public function setStatus($status) {
    $this->nodeWrapper->status = $status;
  }

  public function getComment() {
    return $this->nodeWrapper->comment->value();
  }

  public function setComment($comment) {
    $this->nodeWrapper->comment = $comment;
  }

  public function getPromote() {
    return $this->nodeWrapper->promote->value();
  }

  public function setPromote($promote) {
    $this->nodeWrapper->promote = $promote;
  }

  public function getSticky() {
    return $this->nodeWrapper->sticky->value();
  }

  public function setSticky($sticky) {
    $this->nodeWrapper->sticky = $sticky;
  }

  public function getNid() {
    return $this->nodeWrapper->nid->value();
  }

  public function setNid($nid) {
    $this->nodeWrapper->nid = $nid;
  }

  public function getType() {
    return $this->nodeWrapper->type->value();
  }

  public function setType($type) {
    $this->nodeWrapper->type = $type;
  }

  public function getLanguage() {
    return $this->nodeWrapper->language->value();
  }

  public function setLanguage($language) {
    $this->nodeWrapper->language = $language;
  }

  public function getCreated() {
    return $this->nodeWrapper->created->value();
  }

  public function setCreated($created) {
    $this->nodeWrapper->created = $created;
  }

  public function getChanged() {
    return $this->nodeWrapper->changed->value();
  }

  public function setChanged($changed) {
    $this->nodeWrapper->changed = $changed;
  }

  public function getTnid() {
    return $this->nodeWrapper->tnid->value();
  }

  public function setTnid($tnid) {
    $this->nodeWrapper->tnid = $tnid;
  }

  public function getTranslate() {
    return $this->nodeWrapper->translate->value();
  }

  public function setTranslate($translate) {
    $this->nodeWrapper->translate = $translate;
  }

  public function getRevisionTimestamp() {
    return $this->nodeWrapper->revisionTimestamp->value();
  }

  public function setRevisionTimestamp($revisionTimestamp) {
    $this->nodeWrapper->revisionTimestamp = $revisionTimestamp;
  }

  public function getRevisionUid() {
    return $this->nodeWrapper->revisionUid->value();
  }

  public function setRevisionUid($revisionUid) {
    $this->nodeWrapper->revisionUid = $revisionUid;
  }

  public function getCid() {
    return $this->nodeWrapper->cid->value();
  }

  public function setCid($cid) {
    $this->nodeWrapper->cid = $cid;
  }

  public function getLastCommentTimestamp() {
    return $this->nodeWrapper->las_comment_timestamp->value();
  }

  public function setLastCommentTimestamp($lastCommentTimestamp) {
    $this->nodeWrapper->lastCommentTimestamp = $lastCommentTimestamp;
  }

  public function getLastCommentName() {
    return $this->nodeWrapper->lastCommentName->value();
  }

  public function setLastCommentName($lastCommentName) {
    $this->nodeWrapper->lastCommentName = $lastCommentName;
  }

  public function getLastCommentUid() {
    return $this->nodeWrapper->lastCommentUid->value();
  }

  public function setLastCommentUid($lastCommentUid) {
    $this->nodeWrapper->lastCommentUid = $lastCommentUid;
  }

  public function getCommentCount() {
    return $this->nodeWrapper->commentCount->value();
  }

  public function setCommentCount($commentCount) {
    $this->nodeWrapper->commentCount = $commentCount;
  }

  public function getName() {
    return $this->nodeWrapper->name->value();
  }

  public function setName($name) {
    $this->nodeWrapper->name = $name;
  }

  public function getPicture() {
    return $this->nodeWrapper->picture->value();
  }

  public function setPicture($picture) {
    $this->nodeWrapper->picture = $picture;
  }

  public function getData() {
    return $this->nodeWrapper->data->value();
  }

  public function setData($data) {
    $this->nodeWrapper->data = $data;
  }

  public function getContenTypeFields() {
    return $this->nodeWrapper->contenTypeFields;
  }

  public function getNode() {
    return $this->nodeWrapper->raw();
  }

  public function nodeSave() {
    $this->nodeWrapper->save();
  }
}