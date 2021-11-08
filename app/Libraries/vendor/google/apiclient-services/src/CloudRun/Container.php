<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\CloudRun;

class Container extends \Google\Collection
{
  protected $collection_key = 'volumeMounts';
  public $args;
  public $command;
  protected $envType = EnvVar::class;
  protected $envDataType = 'array';
  protected $envFromType = EnvFromSource::class;
  protected $envFromDataType = 'array';
  public $image;
  public $imagePullPolicy;
  protected $livenessProbeType = Probe::class;
  protected $livenessProbeDataType = '';
  public $name;
  protected $portsType = ContainerPort::class;
  protected $portsDataType = 'array';
  protected $readinessProbeType = Probe::class;
  protected $readinessProbeDataType = '';
  protected $resourcesType = ResourceRequirements::class;
  protected $resourcesDataType = '';
  protected $securityContextType = SecurityContext::class;
  protected $securityContextDataType = '';
  protected $startupProbeType = Probe::class;
  protected $startupProbeDataType = '';
  public $terminationMessagePath;
  public $terminationMessagePolicy;
  protected $volumeMountsType = VolumeMount::class;
  protected $volumeMountsDataType = 'array';
  public $workingDir;

  public function setArgs($args)
  {
    $this->args = $args;
  }
  public function getArgs()
  {
    return $this->args;
  }
  public function setCommand($command)
  {
    $this->command = $command;
  }
  public function getCommand()
  {
    return $this->command;
  }
  /**
   * @param EnvVar[]
   */
  public function setEnv($env)
  {
    $this->env = $env;
  }
  /**
   * @return EnvVar[]
   */
  public function getEnv()
  {
    return $this->env;
  }
  /**
   * @param EnvFromSource[]
   */
  public function setEnvFrom($envFrom)
  {
    $this->envFrom = $envFrom;
  }
  /**
   * @return EnvFromSource[]
   */
  public function getEnvFrom()
  {
    return $this->envFrom;
  }
  public function setImage($image)
  {
    $this->image = $image;
  }
  public function getImage()
  {
    return $this->image;
  }
  public function setImagePullPolicy($imagePullPolicy)
  {
    $this->imagePullPolicy = $imagePullPolicy;
  }
  public function getImagePullPolicy()
  {
    return $this->imagePullPolicy;
  }
  /**
   * @param Probe
   */
  public function setLivenessProbe(Probe $livenessProbe)
  {
    $this->livenessProbe = $livenessProbe;
  }
  /**
   * @return Probe
   */
  public function getLivenessProbe()
  {
    return $this->livenessProbe;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  /**
   * @param ContainerPort[]
   */
  public function setPorts($ports)
  {
    $this->ports = $ports;
  }
  /**
   * @return ContainerPort[]
   */
  public function getPorts()
  {
    return $this->ports;
  }
  /**
   * @param Probe
   */
  public function setReadinessProbe(Probe $readinessProbe)
  {
    $this->readinessProbe = $readinessProbe;
  }
  /**
   * @return Probe
   */
  public function getReadinessProbe()
  {
    return $this->readinessProbe;
  }
  /**
   * @param ResourceRequirements
   */
  public function setResources(ResourceRequirements $resources)
  {
    $this->resources = $resources;
  }
  /**
   * @return ResourceRequirements
   */
  public function getResources()
  {
    return $this->resources;
  }
  /**
   * @param SecurityContext
   */
  public function setSecurityContext(SecurityContext $securityContext)
  {
    $this->securityContext = $securityContext;
  }
  /**
   * @return SecurityContext
   */
  public function getSecurityContext()
  {
    return $this->securityContext;
  }
  /**
   * @param Probe
   */
  public function setStartupProbe(Probe $startupProbe)
  {
    $this->startupProbe = $startupProbe;
  }
  /**
   * @return Probe
   */
  public function getStartupProbe()
  {
    return $this->startupProbe;
  }
  public function setTerminationMessagePath($terminationMessagePath)
  {
    $this->terminationMessagePath = $terminationMessagePath;
  }
  public function getTerminationMessagePath()
  {
    return $this->terminationMessagePath;
  }
  public function setTerminationMessagePolicy($terminationMessagePolicy)
  {
    $this->terminationMessagePolicy = $terminationMessagePolicy;
  }
  public function getTerminationMessagePolicy()
  {
    return $this->terminationMessagePolicy;
  }
  /**
   * @param VolumeMount[]
   */
  public function setVolumeMounts($volumeMounts)
  {
    $this->volumeMounts = $volumeMounts;
  }
  /**
   * @return VolumeMount[]
   */
  public function getVolumeMounts()
  {
    return $this->volumeMounts;
  }
  public function setWorkingDir($workingDir)
  {
    $this->workingDir = $workingDir;
  }
  public function getWorkingDir()
  {
    return $this->workingDir;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Container::class, 'Google_Service_CloudRun_Container');
