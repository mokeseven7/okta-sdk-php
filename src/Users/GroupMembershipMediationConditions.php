<?php
/*******************************************************************************
 * Copyright 2017 Okta, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 ******************************************************************************/

namespace Okta\Users;

use Okta\Resource\AbstractResource;

class GroupMembershipMediationConditions extends AbstractResource
{
    const USERS = 'users';
    const GROUPS = 'groups';
    const PEOPLE = 'people';
    const EXPRESSION = 'expression';

    /**
     * @return GroupMembershipMediationUserCondition
     */
    public function getUsers(array $options = [])
    {
        return $this->getResourceProperty(
            self::USERS,
            GroupMembershipMediationUserCondition::class,
            $options
        );
    }

    /**
     * @return self
     */
    public function setUsers(GroupMembershipMediationUserCondition $users)
    {
        $this->setResourceProperty(
            self::USERS,
            $users
        );
        
        return $this;
    }
    
    /**
     * @return GroupMembershipMediationGroupCondition
     */
    public function getGroups(array $options = [])
    {
        return $this->getResourceProperty(
            self::GROUPS,
            GroupMembershipMediationGroupCondition::class,
            $options
        );
    }

    /**
     * @return self
     */
    public function setGroups(GroupMembershipMediationGroupCondition $groups)
    {
        $this->setResourceProperty(
            self::GROUPS,
            $groups
        );
        
        return $this;
    }
    
    /**
     * @return GroupMembershipMediationPeopleCondition
     */
    public function getPeople(array $options = [])
    {
        return $this->getResourceProperty(
            self::PEOPLE,
            GroupMembershipMediationPeopleCondition::class,
            $options
        );
    }

    /**
     * @return self
     */
    public function setPeople(GroupMembershipMediationPeopleCondition $people)
    {
        $this->setResourceProperty(
            self::PEOPLE,
            $people
        );
        
        return $this;
    }
    
    /**
     * @return GroupMembershipMediationExpressionCondition
     */
    public function getExpression(array $options = [])
    {
        return $this->getResourceProperty(
            self::EXPRESSION,
            GroupMembershipMediationExpressionCondition::class,
            $options
        );
    }

    /**
     * @return self
     */
    public function setExpression(GroupMembershipMediationExpressionCondition $expression)
    {
        $this->setResourceProperty(
            self::EXPRESSION,
            $expression
        );
        
        return $this;
    }
}