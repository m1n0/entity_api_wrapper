<?php

/**
 * @file
 * User wrapper class.
 */

namespace Drupal\entity_api_wrapper\EntityWrapper\User;

use \EntityDrupalWrapper;

class UserWrapper extends EntityDrupalWrapper {
  private $userProperties = array(
    'uid',
    'name',
    'pass',
    'mail',
    'theme',
    'signature',
    'signature_format',
    'created',
    'access',
    'login',
    'status',
    'timezone',
    'language',
    'picture',
    'init',
    'data',
    'roles',
  );

  protected $userWrapper;

  function __construct($user) {
    $this->userWrapper = new EntityDrupalWrapper('user', $user);
  }

  public function getUserProperties() {
    return $this->userWrapper->userProperties;
  }

  public function getUid() {
    return $this->userWrapper->uid->value();
  }

  public function setUid($uid) {
    $this->userWrapper->uid = $uid;
  }

  public function getName() {
    return $this->userWrapper->name->value();
  }

  public function setName($name) {
    $this->userWrapper->name = $name;
  }

  public function getPass() {
    return $this->userWrapper->pass->value();
  }

  public function setPass($pass) {
    $this->userWrapper->pass = $pass;
  }

  public function getMail() {
    return $this->userWrapper->mail->value();
  }

  public function setMail($mail) {
    $this->userWrapper->mail = $mail;
  }

  public function getTheme() {
    return $this->userWrapper->theme->value();
  }

  public function setTheme($theme) {
    $this->userWrapper->theme = $theme;
  }

  public function getSignature() {
    return $this->userWrapper->signature->value();
  }

  public function setSignature($signature) {
    $this->userWrapper->signature = $signature;
  }

  public function getSignatureFormat() {
    return $this->userWrapper->signatureFormat->value();
  }

  public function setSignatureFormat($signatureFormat) {
    $this->userWrapper->signatureFormat = $signatureFormat;
  }

  public function getCreated() {
    return $this->userWrapper->created->value();
  }

  public function setCreated($created) {
    $this->userWrapper->created = $created;
  }

  public function getAccess() {
    return $this->userWrapper->access->value();
  }

  public function setAccess($access) {
    $this->userWrapper->access = $access;
  }

  public function getLogin() {
    return $this->userWrapper->login->value();
  }

  public function setLogin($login) {
    $this->userWrapper->login = $login;
  }

  public function getStatus() {
    return $this->userWrapper->status->value();
  }

  public function setStatus($status) {
    $this->userWrapper->status = $status;
  }

  public function getTimezone() {
    return $this->userWrapper->timezone->value();
  }

  public function setTimezone($timezone) {
    $this->userWrapper->timezone = $timezone;
  }

  public function getLanguage() {
    return $this->userWrapper->language->value();
  }

  public function setLanguage($language) {
    $this->userWrapper->language = $language;
  }

  public function getPicture() {
    return $this->userWrapper->picture->value();
  }

  public function setPicture($picture) {
    $this->userWrapper->picture = $picture;
  }

  public function getInit() {
    return $this->userWrapper->init->value();
  }

  public function setInit($init) {
    $this->userWrapper->init = $init;
  }

  public function getData() {
    return $this->userWrapper->data->value();
  }

  public function setData($data) {
    $this->userWrapper->data = $data;
  }

  public function getRoles() {
    return $this->userWrapper->roles->value();
  }

  public function setRoles($roles) {
    $this->userWrapper->roles = $roles;
  }

  public function getUser() {
    return $this->userWrapper->raw();
  }

  public function userSave() {
    $this->userWrapper->save();
  }
}
