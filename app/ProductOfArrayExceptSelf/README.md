# 238. Product of Array Except Self
[https://leetcode.com/problems/product-of-array-except-self/](https://leetcode.com/problems/product-of-array-except-self/)

Given an integer array nums, return _an array_ answer _such that_ `answer [i]` _is equal to the product of all the elements of `nums` excepts `nums[i]`_

The product of any prefix or suffix of `nums` is **guaranteed** to fit in a **32-bit** integer.

You must write an algorithm that runs in `O(n)` time and without using the division operation.

**Example 1:**
<pre>
<b>Input:</b> nums = [1,2,3,4]
<b>Output:</b> [24,12,8,6]
</pre>

**Example 2:**
<pre>
<b>Input:</b> nums = [-1,1,0,-3,3]
<b>Output:</b> [0,0,9,0,0]
</pre>

**Constraints:**
- <pre>2 <= nums.length <= 10<sup>5</sup></pre>
- <pre>-30 <= nums[i] <= 30</pre>
- The product of any prefix or suffix of `nums` is **guaranteed** to fit in a `32-bit` integer.

**Follow up:** Can you solve the problem in `O(1)` with extra space complexity? (The output array **does not** count as extra space for space complexity analysis.)