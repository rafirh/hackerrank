#!/bin/ruby

require 'json'
require 'stringio'

#
# Complete the 'bigSorting' function below.
#
# The function is expected to return a STRING_ARRAY.
# The function accepts STRING_ARRAY unsorted as parameter.
#

def bigSorting(unsorted)
    # Write your code here
    unsorted.sort_by(&:to_i)
end

fptr = File.open(ENV['OUTPUT_PATH'], 'w')

n = gets.strip.to_i

unsorted = Array.new(n)

n.times do |i|
    unsorted_item = gets.chomp

    unsorted[i] = unsorted_item
end

result = bigSorting unsorted

fptr.write result.join "\n"
fptr.write "\n"

fptr.close()
