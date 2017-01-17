<?php

/**
 * Class VueJsInsertTags
 *
 * This class contains methods to parse insert tags that
 * are needed for vue.js
 *
 * Insert Tags:
 *
 *    {{vue-open}}
 *    {{vue-close}}
 */
class VueJsInsertTags extends System
{
	/**
	 * replaceInsertTagsVueOpen
	 *
	 * Insert Tag: {{vue-open}}
	 *
	 * @param	string	$strTag
	 * @return	mixed
	 */
	public function replaceInsertTagsVueOpen ($strTag)
	{
		if (trim ($strTag) === 'vue-open')
		{
			return '{{';
		}


		return false;
	}


	/**
	 * replaceInsertTagsVueClose
	 *
	 * Insert Tag: {{vue-close}}
	 *
	 * @param	string	$strTag
	 * @return	mixed
	 */
	public function replaceInsertTagsVueClose ($strTag)
	{
		if (trim ($strTag) === 'vue-close')
		{
			return '}}';
		}


		return false;
	}
}
