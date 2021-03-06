/*
 * Copyright 2011-2014 the original author or authors.
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
 */
package org.springframework.data.sequoiadb.config;

/**
 * Constants to declare bean names used by the namespace configuration.
 */
public abstract class BeanNames {

	public static final String MAPPING_CONTEXT_BEAN_NAME = "sequoiadbMappingContext";

	static final String INDEX_HELPER_BEAN_NAME = "indexCreationHelper";
	static final String SEQUOIADB_BEAN_NAME = "sdb";
	static final String DB_FACTORY_BEAN_NAME = "sequoiadbFactory";
	static final String VALIDATING_EVENT_LISTENER_BEAN_NAME = "validatingSequoiadbEventListener";
	static final String IS_NEW_STRATEGY_FACTORY_BEAN_NAME = "isNewStrategyFactory";
	static final String DEFAULT_CONVERTER_BEAN_NAME = "mappingConverter";
	static final String SEQUOIADB_TEMPLATE_BEAN_NAME = "sequoiadbTemplate";
	static final String GRID_FS_TEMPLATE_BEAN_NAME = "gridFsTemplate";
}
