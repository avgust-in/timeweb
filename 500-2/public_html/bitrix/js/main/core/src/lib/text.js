import Type from './type';

const reEscape = /[&<>'"]/g;
const reUnescape = /&(?:amp|#38|lt|#60|gt|#62|apos|#39|quot|#34);/g;

const escapeEntities = {
	'&': '&amp;',
	'<': '&lt;',
	'>': '&gt;',
	"'": '&#39;',
	'"': '&quot;',
};

const unescapeEntities = {
	'&amp;': '&',
	'&#38;': '&',
	'&lt;': '<',
	'&#60;': '<',
	'&gt;': '>',
	'&#62;': '>',
	'&apos;': "'",
	'&#39;': "'",
	'&quot;': '"',
	'&#34;': '"',
};


export default class Text
{
	/**
	 * Encodes all unsafe entities
	 * @param {string} value
	 * @return {string}
	 */
	static encode(value: string): string
	{
		if (Type.isString(value))
		{
			return value.replace(reEscape, item => escapeEntities[item]);
		}

		return value;
	}

	/**
	 * Decodes all encoded entities
	 * @param {string} value
	 * @return {string}
	 */
	static decode(value: string): string
	{
		if (Type.isString(value))
		{
			return value.replace(reUnescape, item => unescapeEntities[item]);
		}

		return value;
	}

	static getRandom(length = 8)
	{
		// eslint-disable-next-line
		return [...Array(length)].map(() => (~~(Math.random() * 36)).toString(36)).join('');
	}
}