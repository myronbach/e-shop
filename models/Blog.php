<?php


class Blog
{
	public static function getBlogList()
	{
		$db = Db::getConnection();

		$blogList = [];
		$result = $db->query("SELECT id, title, date, preview, content FROM blog
								WHERE status = '1' ORDER BY date DESC LIMIT 3 ");

		$i = 0;
		while ($row = $result->fetch(PDO::FETCH_ASSOC))
		{
			$blogList[$i]['id'] = $row['id'];
			$blogList[$i]['title'] = $row['id'];
			$blogList[$i]['preview'] = $row['preview'];
			$blogList[$i]['date'] = mktime($row['id']);
			$blogList[$i]['short_content'] = $row['content'];
			$i++;
		}

		return $blogList;
	}

	public static function getBlogItemById($id)
	{
		if ($id)
		{
			$db = Db::getConnection();

			$result = $db->query("SELECT * FROM blog WHERE id=" . $id);
			$blogItem = $result->fetch(PDO::FETCH_ASSOC);

			return $blogItem;
		}
	}
}
