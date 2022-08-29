# Top K Frequent Elements

Give an integer array `nums` and an integer k, return _the_ `k` most _frequent elements_. You may return the answer in **any order**

**Example 1:**
<pre>
<b>Input:</b> nums = [1,1,1,2,2,3], k = 2
<b>Output:</b> [1,2]
</pre>

**Example 2:**
<pre>
<b>Input:</b> nums = [1], k = 1
<b>Output:</b> [1]
</pre>

**Constraints:**
- <pre>1 <= nums.length <= 10<sup>5</sup></pre>
- <pre>-10<sup>4</sup> <= nums[i] <= 10<sup>4</sup></pre>
- <pre>k is in the range [1, the number of unique elements in the array]</pre>
- It is guaranteed that the answer is **unique**