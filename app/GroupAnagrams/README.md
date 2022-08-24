# Group Anagrams

Given an array of string `strs`, group **the anagrams** together. You can return the answer in **any order**.

An **Anagram** is a word or phrase formed by rearranging the letters of a different word or phrase, typically using all the original letters exactly once.

**Example 1:**
<pre><b>Input:</b> strs = ['eat', 'tea', 'tan', 'ate', 'nat', 'bat']</pre>
<pre><b>Output:</b> [["bat"],["nat","tan"],["ate","eat","tea"]]</pre>

**Example 2:**
<pre><b>Input:</b> strs = ['']</pre>
<pre><b>Output:</b> ['']</pre>

**Example 3:**
<pre><b>Input:</b> strs = ['a']</pre>
<pre><b>Output:</b> [['a']]</pre>

**Constraints**
- <pre>1 <= strs.length <= 10<sup>4</sup></pre>
- <pre>0 <= strs[i].length <= 100</pre>
- `strs[i]` consists of lowercase English letters.
