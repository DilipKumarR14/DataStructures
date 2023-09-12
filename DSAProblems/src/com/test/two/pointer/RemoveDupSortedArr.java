package com.test.two.pointer;

import java.util.Arrays;

public class RemoveDupSortedArr {

	public static void main(String[] args) {
		int[] list = new int[] { 0,1,1,2,3,3};
//		int extracted = removeDuplicates1(list);

		int arrSize = solution2(list);
		
		System.out.println(arrSize);
		
//		System.out.println(extracted);

	}

//	private static int extracted() {
//		int[] list = new int[] { 1,1,2 };
//
//		List<Integer> arr = Arrays.stream(list).boxed().collect(Collectors.toList());
//		List<Integer> subList =new ArrayList<>();
//		int i = 0;
//		int j = i + 1;
//		while (i < arr.size() && j != arr.size()) {
//			if (arr.get(i) == arr.get(j)) {
//				j++;
//			} else {
//				i++;
//				int temp = arr.get(j);
//				arr.set(i, temp);
//				arr.set(j, -1);
//				j++;
//			}
//			
//			subList = arr.subList(0, i+1);			
//		}
//
//		System.out.println("sublist "+subList);
//		return subList.size();
//	}

	public static int binarySearch(int[] nums, int low, int high, int val) {
		int n = nums.length;
		int res = -1;
		while (low <= high) {
			int mid = low + (high - low) / 2;
			if (nums[mid] <= val)
				low = mid + 1;
			else {
				res = mid;
				high = mid - 1;
			}
		}
		if (res == -1) {
			return n;
		}

		return res;
	}

	public static int removeDuplicates1(int[] nums) {
		int n = nums.length;
		int idx = 0; // It store indexing of unique elements.

		while (idx != n) {
			int i = binarySearch(nums, idx + 1, n - 1, nums[idx]); // It finds upper bound of element.

			if (i == n)
				return idx + 1; // Means that we are not able to find the upper bound of the element.
			idx++;
			nums[idx] = nums[i];
		}
		return idx + 1;
	}
	
	
	 public static int solution2(int[] nums) {
	        int j = 1;
//	        { 0,0,1,1,1,2,2,3,3,4 };
	        for (int i = 1; i < nums.length; i++) {
	        	System.out.println(nums[i]);
	        	System.out.println(nums[i-1]);
	            if (nums[i] != nums[i - 1]) {
	                nums[j] = nums[i];
	                j++;
	            }
	            System.out.println(Arrays.toString(nums));
	        }
	        return j;
	    }

}
